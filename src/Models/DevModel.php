<?php


namespace App\Models;


use App\Data\AbstractModel;
use App\Data\DatabaseHandler;

final class DevModel extends AbstractModel
{
    /**
     * @var string
     */
    private string $dev_description;

    /**
     * DevModel constructor.
     * @param int|null $id
     * @param string $dev_description
     */
    public function __construct(?int $id = null, string $dev_description = '')
    {
        parent::__construct($id);
        $this->dev_description = $dev_description;

    }

    /**
     * @return string
     */
    public function getDevDescription(): string
    {
        return $this->dev_description;
    }

    /**
     * @param string $dev_description
     */
    public function setDevDescription(string $dev_description): void
    {
        $this->dev_description = $dev_description;
    }


    public static function findAll(): array
    {
        return parent::findAllInTable('dev_step');
    }

    static public function findById(int $id): ?AbstractModel
    {
        return parent::findByIdInTable('dev_step', $id);
    }

    static public function findWherePropEqual(string $propName, string $value): array
    {
        return parent::findWherePropEqualInTable('dev_step', $propName, $value);
    }

    public function create($dev_description)
    {
        try{
            $request = DatabaseHandler::prepare("INSERT INTO `dev_step`(`dev_description`) VALUES (:dev_description)");
            $request->execute(
                [
                    ':dev_description' => $dev_description,
                ]
            );
            return true;


        } catch (\PDOException $exception){
            $alerte = var_dump('erreur lors de l\'execution de la requete sql :' . $exception->getMessage());
            return false;
        }

    }

    protected function update(): void
    {
        $this->updateInTable(
            'dev_step', [
                'dev_description' => 'dev_description',
            ]
        );
    }

    public function delete(): void
    {
       $this->deleteInTable('dev_step');
    }


    public function insert(): void
    {
        $this->insertInTable(
            'dev_step',
            [
                'dev_description' => 'dev_description',
            ]
        );
    }
}