<?php


namespace App\Models;


use App\Data\AbstractModel;

class MovieLandModel extends AbstractModel
{
    private string $movie_name;
    private string $movie_url;
    private string $movie_date;
    private int $id_category;

    public function __construct(?int $id, string $movie_name, string $movie_url, string $movie_date, int $id_category)
    {
        parent::__construct($id);
        $this->movie_name = $movie_name;
        $this->movie_url = $movie_url;
        $this->movie_date = $movie_date;
        $this->id_category = $id_category;
    }

    /**
     * @return string
     */
    public function getMovieName(): string
    {
        return $this->movie_name;
    }

    /**
     * @param string $movie_name
     */
    public function setMovieName(string $movie_name): void
    {
        $this->movie_name = $movie_name;
    }

    /**
     * @return string
     */
    public function getMovieUrl(): string
    {
        return $this->movie_url;
    }

    /**
     * @param string $movie_url
     */
    public function setMovieUrl(string $movie_url): void
    {
        $this->movie_url = $movie_url;
    }

    /**
     * @return string
     */
    public function getMovieDate(): string
    {
        return $this->movie_date;
    }

    /**
     * @param string $movie_date
     */
    public function setMovieDate(string $movie_date): void
    {
        $this->movie_date = $movie_date;
    }

    /**
     * @return int
     */
    public function getIdCategory(): int
    {
        return $this->id_category;
    }

    /**
     * @param int $id_category
     */
    public function setIdCategory(int $id_category): void
    {
        $this->id_category = $id_category;
    }

    static public function findAll(): array
    {
        return parent::findAllInTableWithJoin('movies', 'category','category.category_id', 'movies.id_category');
    }

    static public function findById(int $id): ?AbstractModel
    {
        return parent::findByIdInTable('movies', $id);
    }

    static public function findWherePropEqual(string $propName, string $value): array
    {
        return parent::findWherePropEqualInTable('movies', $propName, $value);
    }

    protected function insert(): void
    {
       $this->insertInTable(
           'movies',
           [
               'movie_name' => 'movie_name',
               'movie_url' => 'movie_url',
               'movie_date' => 'movie_date',
               'id_category' => 'id_category',
           ]
       );
    }

    protected function update(): void
    {
        $this->updateInTable(
            'movies',
            [
                'movie_name' => 'movie_name',
                'movie_url' => 'movie_url',
                'movie_date' => 'movie_date',
                'id_category' => 'id_category',
            ]
        );
    }

    public function delete(): void
    {
        $this->deleteInTable('movies');
    }
}