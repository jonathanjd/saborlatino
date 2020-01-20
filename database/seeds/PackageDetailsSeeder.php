<?php

use App\Package;
use App\DetailPackage;
use Illuminate\Database\Seeder;

class PackageDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $package = new Package();
        $package->name = 'Plan A';
        $package->amount = '50';
        $package->note = 'Cupidatat laborum aliquip quis deserunt quis tempor mollit reprehenderit ea ex. Consequat eu laborum cillum excepteur cupidatat consectetur deserunt pariatur ea non enim. Voluptate ipsum qui fugiat dolore anim officia minim ut fugiat id deserunt laboris.';
        $package->premium = false;
        $package->active = true;
        $package->save();

        $count = 5;

        for ($i=0; $i < $count; $i++) { 
            # code...
            $detailPackage = new DetailPackage();
            $detailPackage->feature = '#' . $i . 'Sint ea incididunt consectetur est.';
            $detailPackage->package_id = $package->id;
            $detailPackage->save();
        }

        $package = new Package();
        $package->name = 'Plan B';
        $package->amount = '100';
        $package->note = 'Cupidatat laborum aliquip quis deserunt quis tempor mollit reprehenderit ea ex. Consequat eu laborum cillum excepteur cupidatat consectetur deserunt pariatur ea non enim. Voluptate ipsum qui fugiat dolore anim officia minim ut fugiat id deserunt laboris.';
        $package->premium = true;
        $package->active = true;
        $package->save();

        $count = 5;

        for ($i=0; $i < $count; $i++) { 
            # code...
            $detailPackage = new DetailPackage();
            $detailPackage->feature = '#' . $i . 'Sint ea incididunt consectetur est.';
            $detailPackage->package_id = $package->id;
            $detailPackage->save();
        }

        $package = new Package();
        $package->name = 'Plan C';
        $package->amount = '150';
        $package->note = 'Cupidatat laborum aliquip quis deserunt quis tempor mollit reprehenderit ea ex. Consequat eu laborum cillum excepteur cupidatat consectetur deserunt pariatur ea non enim. Voluptate ipsum qui fugiat dolore anim officia minim ut fugiat id deserunt laboris.';
        $package->premium = false;
        $package->active = true;
        $package->save();

        $count = 5;

        for ($i=0; $i < $count; $i++) { 
            # code...
            $detailPackage = new DetailPackage();
            $detailPackage->feature = '#' . $i . 'Sint ea incididunt consectetur est.';
            $detailPackage->package_id = $package->id;
            $detailPackage->save();
        }

    }
}
