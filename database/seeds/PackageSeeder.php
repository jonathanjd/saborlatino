<?php

use App\Package;
use App\DetailPackage;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
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
        $package->premium = false;
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
        $package->premium = true;
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
        $package->premium = false;
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
