<?php


namespace App\Data;


abstract class AbstractModel
{

    /**
     * @var int|null
     */
    protected $id;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /******
     * Accès à la database
     */

    /**
     * @param \PDOStatement $statement
     * @return array
     * Récupère le nom de la classe depuis laquelle cette methode est appelée,
     * demande a l'interface de la bdd retourné l'ensemble des résultats de la requête
     * en passant les résultats a travers la function createInstance() de la classe appelante.
     */
    protected static function fetchAllFromStatement(\PDOStatement $statement): array
    {
        $className = \get_called_class();
        return $statement->fetchAll(\PDO::FETCH_FUNC,[$className, 'createInstance']);
    }

    /**
     * @param \PDOStatement $statement
     * @return AbstractModel|null
     * Récupère tous les résultats de la requête sous forme d'objet
     * si la liste est vide renvoie null
     * sinon return le premier résultats de la liste.
     */
    protected static function  fetchOneOrNull(\PDOStatement $statement): ?AbstractModel
    {
        $result = static::fetchAllFromStatement($statement);
        if(empty($result)){
            return null;
        }
        return $result[0];
    }

    /**
     * @param string $tableName
     * Trouve tout les enregistrements d'une database table
     * @return array
     */
    protected static function findAllInTable(string $tableName): array
    {
        $statement = DatabaseHandler::query("SELECT * FROM `$tableName`");
        return static::fetchAllFromStatement($statement);
    }

    /**
     *
     * Trouve tout les enregistrements d'une database table
     * @param string $tableName
     * @param string $tableJoin
     * @param string $tableJoinKey
     * @param string $tableNameKey
     * @return array
     */
    protected static function findAllInTableWithJoin(string $tableName, string $tableJoin, string $tableJoinKey, string $tableNameKey): array
    {
        $statement = DatabaseHandler::query("SELECT * FROM $tableName LEFT JOIN $tableJoin On $tableJoinKey = $tableNameKey");
        return static::fetchAllFromStatement($statement);
    }

    /**
     * @param string $tableName
     * @param int $id
     * @return AbstractModel|null
     * Trouve le premier enregistrement de la database par son ID
     */
    protected static function findByIdInTable( string $tableName, int $id): ?AbstractModel
    {
        $statement = DatabaseHandler::prepare("SELECT * FROM $tableName WHERE `id` = :id");
        $statement->execute([':id' => $id]);
        return static::fetchOneOrNull($statement);
    }

    /**
     * @param string $tableName
     * @param string $propName
     * @param string $value
     * @return array
     * Trouve les elements correspondant a la valeur demander.
     */
    protected static function findWherePropEqualInTable(string $tableName, string $propName, string $value): array
    {
        $statement = DatabaseHandler::prepare("SELECT * FROM $tableName WHERE $propName = :val");
        $statement->execute([ ':val' => $value ]);
        return static::fetchAllFromStatement($statement);
    }

    /**
     *
     */
    protected function save(): void
    {
        if(is_null($this->getId())) {
            $this->insert();
        } else {
            $this->update();
        }
    }


    /**
     * @param string $tableName
     * @param array $properties
     */
    protected function insertInTable(string $tableName, array $properties): void
    {
        $params = [];

        foreach ($properties as $propertyName => $dbName){
            $propertyNames[] = "`$dbName`";
            $valueNames[] = ":$propertyName";
            $params[":$propertyName"] = $this->$propertyName;
        }

        $propertyNames = join(', ', $propertyNames);
        $valueNames = join(', ', $valueNames);

        $queryArray = [
            "INSERT INTO $tableName",
            "(" . $propertyNames . ")",
            "VALUES (" . $valueNames . ")",
            ];

        $query = join("\n", $queryArray);

        $statement = DatabaseHandler::prepare($query);
        $statement->execute($params);

        $this->id = DatabaseHandler::lastInsertId();
    }

    /**
     * @param string $tableName
     * @param array $properties
     */
    protected function updateInTable(string $tableName, array $properties): void
    {

        $params = [ ':id' => $this->getId() ];

        foreach ($properties as $propName => $dbName) {
            $values []= "`$dbName` = :$propName";
            $params[":$propName"] = $this->$propName;
        }

        $values = join(",\n", $values);

        $queryArray = [
            "UPDATE `$tableName`",
            'SET',
            $values,
            "WHERE `id` = :id"
        ];

        $query = join("\n", $queryArray);

        $statement = DatabaseHandler::prepare($query);
        $statement->execute($params);
    }

    /**
     * @param string $tableName
     */
    protected function deleteInTable(string $tableName): void
    {
        $statement = DatabaseHandler::prepare("DELETE FROM `$tableName` WHERE `id` = :id");
        $statement->execute([ ':id' => $this->id ]);

        $this->id = null;
    }

    /**
     * @param mixed ...$params
     * @return AbstractModel
     */
    public function createInstance(...$params): AbstractModel
    {
        $className = \get_called_class();
        return new $className(...$params);
    }

    /***
     *
     * Déclaration de méthodes
     */

    /**
     * @return array
     */
    abstract static public function findAll(): array;

    /**
     * @param int $id
     * @return AbstractModel|null
     */
    abstract static public function findById(int $id): ?AbstractModel;

    /**
     * @param string $propName
     * @param string $value
     * @return array
     */
    abstract static public function findWherePropEqual(string $propName, string $value): array;

    /**
     * @abstract
     */
    abstract protected function insert(): void;

    /**
     * @abstract
     */
    abstract protected function update(): void;

    /**
     * @abstract
     */
    abstract public function delete(): void;






}