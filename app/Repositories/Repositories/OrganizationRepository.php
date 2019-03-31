<?php

namespace App\Repositories\Repositories;

use App\{
	Model\Organization,
	Repositories\Contracts\Organization as OrganizationContract
};
use Illuminate\Support\Facades\Hash;

class OrganizationRepository implements OrganizationContract
{
	/**
	 * Cria um novo modelo e retorna o.
	 *
     * @param  array  $atributos
     * @return \Illuminate\Database\Eloquent\Model|$this
     */
	public function create(array $attributes): \Illuminate\Database\Eloquent\Model
	{
		$organization = new Organization;

		$organization->name = $attributes['name'];
		$organization->username = $attributes['username'];
		$organization->password = Hash::make($attributes['password']);
		$organization->description = $attributes['description'];

		$organization->save();

		return $organization;
	}

	/**
	 * Retorna um único modelo
	 *
	 * @param  int  $id
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function show(int $id): \Illuminate\Database\Eloquent\Model
	{
		return Organization::findOrFail($id);
	}

	/**
	 * Retorna todos os modelos
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function all(): \Illuminate\Support\Collection
	{
		return Organization::all();
	}

    /**
     * Actualiza o modelo na base de dados
     *
     * @param  array  $atributos
     * @param  int  $id
     * @return bool
     */
	public function update(array $attributes, int $id): bool
	{
		$organization = Organization::findOrFail($id);

		$organization->name = $attributes['name'];
		$organization->username = $attributes['username'];
		$organization->password = Hash::make($attributes['password']);
		$organization->description = $attributes['description'];

		$organization->save();

		return $organization;
	}

    /**
     * Apaga o modelo na base de dados
     *
     * @param  int  $id
     * @return bool|null
     *
     * @throws \Exception
     */
	public function delete(int $id): bool
	{
		$organization = Organization::findOrFail($id);

		return $organization->delete();
	}
}