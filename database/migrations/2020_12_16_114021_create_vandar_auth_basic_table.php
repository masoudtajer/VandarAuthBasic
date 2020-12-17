<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Masoud5070\VandarAuthBasic\Models\Admin;

class CreateVandarAuthBasicTable extends Migration
{
    /**
     * Save model instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application|mixed
     */
    private $model;



    /**
     * CreateVandarAuthBasicTable constructor.
     * Get model instance and save that to property.
     *
     */
    public function __construct()
    {
        $this->model = app(config('vandarauthbasic.model_name', Admin::class));
    }



    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->model->getTable(), function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->model->getTable());
    }
}
