<?php 

namespace ActivismeBE\DatabaseLayering\Repositories\Contracts;

/**
 * Interface RepositoryInterface
 *
 * @category RepositoryInterface
 * @package  ActivismeBE\DatabaseLayering\Contracts
 * @author   Tim Joosten <topairy@gmail.com>
 */
interface RepositoryInterface
{
    /**
     * Get all the rows for the database table.
     *
     * @param  array $columns The columns u want to use in your view.
     * @return mixed
     */
    public function all(array $columns = ['*']);

    /**
     * Paginate the database table results.
     *
     * @param  int     $perPage The ata rows per page in the view.
     * @param  array   $columns The coolumns u want to use in your view.
     * @return mixed
     */
    public function paginate(int $perPage = 1, array $columns = ['*']);

    /**
     * Create a new row in the database table.
     *
     * @param array $data The data u want to store in the database.
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * Save a model without mass assignment
     *
     * @param  array $data The data u want to store in the database.
     * @return bool
     */
    public function saveModel(array $data): bool;

    /**
     * Update a record in the database table.
     *
     * @param  array   $data         The input data fields u want to update in the db.
     * @param  int     $primaryKey   The PK in the database.
     * @return mixed
     */
    public function update(array $data, int $primaryKey);

    /**
     * Delete a record in the database.
     *
     * @param  int $primaryKey The resource id in the database. (PK)
     * @return mixed
     */
    public function delete(int $primaryKey);

    /**
     * Delete all by field and value.
     *
     * @param  string $field     The database column name.
     * @param  string $selector  The where clause selector.
     * @param  string $value     The value for the given database column.
     * @return boolean
     */
    public function deleteAllBy(string $field, string $selector, string $value): bool;

    /**
     * Find a record in the database based on the primary key.
     *
     * @param  int     $primaryKey       The resource id in the database. (PK)
     * @param  array   $columns          The db table columns that u want to use in your view.
     * @return mixed
     */
    public function find(int $primaryKey, array $columns = ['*']);

    /**
     * Try to find a record in the database based on the primary key.
     *
     * @param  int   $primaryKey The primary key in the database table.
     * @return void
     */
    public function findOrFail(int $primaryKey);

    /**
     * Find a collection of models by the given query conditions.
     *
     * @param  string $field   The field where u want to search on.
     * @param  string $value   The value in the above given field.
     * @param  array  $columns The database columns u want to use on the view.
     * @return mixed
     */
    public function findBy(string $field, string $value, array $columns = ['*']);

    /**
     * Find a database record by value and column.
     *
     * @param  string $field   The database column name.
     * @param  string $value   The value in the database column.
     * @param  array  $columns The database table columns u want to use in your view.
     * @return mixed
     */
    public function findAllBy(string $field, string $value, array $columns = ['*']);

    /**
     * Find a collection of models by the given query conditions.
     *
     * @param  array $where   The keys and values where u want to search on.
     * @param  array $columns The database columns u want to use in the view.
     * @return mixed
     */
    public function findWhere(array $where, array $columns = ['*']);
}
