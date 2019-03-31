<?php

namespace App\Repositories\Contracts;

/**
 * Base contract
 *
 * @author Calvin Chiulele <cchiulele@protonmail.com>
 * @since 1.0.0
 *
 */
interface BaseContract
{
	/**
	 * Cria um novo modelo e retorna o.
	 *
     * @param  array  $atributos
     * @return \Illuminate\Database\Eloquent\Model|$this
     */
	public function create(array $atributos): \Illuminate\Database\Eloquent\Model;

	/**
	 * Retorna um único modelo
	 *
	 * @param  int  $id
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function show(int $id): \Illuminate\Database\Eloquent\Model;

	/**
	 * Retorna todos os modelos
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function all(): \Illuminate\Support\Collection;

    /**
     * Actualiza o modelo na base de dados
     *
     * @param  array  $atributos
     * @param  array  $opcoes
     * @return bool
     */
	public function update(array $atributos, int $id): bool;

    /**
     * Apaga o modelo na base de dados
     *
     * @param  int  $id
     * @return bool|null
     *
     * @throws \Exception
     */
	public function delete(int $id): bool;
}
