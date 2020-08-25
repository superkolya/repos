<?php

declare(strict_types=1);

namespace Repositories\Core\Contracts;

interface RepositoryInterface
{
    /**
     * Get records
     *
     * @access	public
     * @param	mixed	$params
     * @return	iterable|null
     */
    public function get($params): ?iterable;

    /**
     * Get first record
     *
     * @access	public
     * @param	array	$filter
     * @return	mixed
     */
    public function first(array $filter);

    /**
     * Get model by id
     *
     * @access	public
     * @param	int  	$id
     * @param	array	$select	Default: null
     * @return	mixed
     */
    public function getById(int $id, array $select = null);

    /**
     * Get model or fail
     *
     * @access	public
     * @param	int  	$id    	
     * @param	array	$select	Default: null
     * @return	mixed
     */
    public function getByIdOrFail(int $id, array $select = null);

    /**
     * Create a new record
     *
     * @param array $data
     * @param array|null $guarded
     * @throws \Repositories\Core\Exceptions\RepositoryException
     * @return mixed
     */
    public function create(array $data);

    /**
     * Update model
     *
     * @param $model
     * @param array $data
     * @throws \Repositories\Core\Exceptions\RepositoryException
     * @return void
     */
    public function update($model, array $data): void;

    /**
     * Delete record
     *
     * @access	public
     * @param	mixed	$model	
     * @throws \Repositories\Core\Exceptions\RepositoryException
     * @return	void
     */
    public function delete($model): void;

    /**
     * Check record is exist
     *
     * @param array $filter
     * @return bool
     */
    public function exists(array $filter): bool;

    /**
     * Count records by parameters
     *
     * @access	public
     * @param	array	$filter	
     * @return	int
     */
    public function count(array $filter = []): int;

    /**
     * Open transaction
     *
     * @access	public
     * @throws \Repositories\Core\Exceptions\RepositoryException
     * @return	void
     */
    public function openTransaction(): void;

    /**
     * Commit transaction if one exists
     *
     * @access	public
     * @throws \Repositories\Core\Exceptions\RepositoryException
     * @return	void
     */
    public function commitTransaction(): void;

    /**
     * Rollback transaction if one exists
     *
     * @access	public
     * @throws \Repositories\Core\Exceptions\RepositoryException
     * @return	void
     */
    public function rollbackTransaction(): void;
}
