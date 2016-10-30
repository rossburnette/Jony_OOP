<?php

namespace Jony\App;

use Jony\App\Repositories\AddressRepositoryInterface;

class Address
{
	use \Jony\App\Traits\Accessible;

	protected $street;
	protected $city;
	public $addressRepository;

	// AddressRepositoryInterface is dependency injection

	public function __construct(AddressRepositoryInterface $addressRepository)
	{
		$this->addressRepository=$addressRepository;
		$this->fillable[]='street';
		$this->fillable[]='city';
		$this->accessible[]='street';
		$this->accessible[]='city';
	}

	public function Find($id)
	{
		$this->addressRepository->Find($id,$this);
		return $this;
	}
}