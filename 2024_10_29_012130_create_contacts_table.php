<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kontak
            $table->string('email')->unique(); // Email kontak
            $table->text('message'); // Pesan kontak
            $table->timestamps(); // Waktu dibuat dan diupdate
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
