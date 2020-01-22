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
        $package->name = 'INDIVIDUAL COACHING';
        $package->amount = '50';
        $package->note = 'Cupidatat laborum aliquip quis deserunt quis tempor mollit reprehenderit ea ex. Consequat eu laborum cillum excepteur cupidatat consectetur deserunt pariatur ea non enim. Voluptate ipsum qui fugiat dolore anim officia minim ut fugiat id deserunt laboris.';
        $package->premium = false;
        $package->active = true;
        $package->save();

        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Inner growth';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Building Confidence';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Building and Achieving Your Vision';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Self-awareness';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();

        $package = new Package();
        $package->name = 'FAMILY COACHING';
        $package->amount = '100';
        $package->note = 'Cupidatat laborum aliquip quis deserunt quis tempor mollit reprehenderit ea ex. Consequat eu laborum cillum excepteur cupidatat consectetur deserunt pariatur ea non enim. Voluptate ipsum qui fugiat dolore anim officia minim ut fugiat id deserunt laboris.';
        $package->premium = true;
        $package->active = true;
        $package->save();

        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Managing Transitions';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Building Courage and Taking the Leap';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Exploring positive alternatives';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Reducing Anxiety and Self-Doubt';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();

        $package = new Package();
        $package->name = 'GROUP COACHING';
        $package->amount = '150';
        $package->note = 'Cupidatat laborum aliquip quis deserunt quis tempor mollit reprehenderit ea ex. Consequat eu laborum cillum excepteur cupidatat consectetur deserunt pariatur ea non enim. Voluptate ipsum qui fugiat dolore anim officia minim ut fugiat id deserunt laboris.';
        $package->premium = false;
        $package->active = true;
        $package->save();

        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Accomplishing Significant Goals';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Building a Personal Brand';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Increase insights';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Building and Strengthening Relationships';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();


        $package = new Package();
        $package->name = 'ADOLESCENT COACHING';
        $package->amount = '150';
        $package->note = 'Cupidatat laborum aliquip quis deserunt quis tempor mollit reprehenderit ea ex. Consequat eu laborum cillum excepteur cupidatat consectetur deserunt pariatur ea non enim. Voluptate ipsum qui fugiat dolore anim officia minim ut fugiat id deserunt laboris.';
        $package->premium = false;
        $package->active = true;
        $package->save();

        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Work Life Integration';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Building a Business';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Enhancing Health and Well-Being';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();
        $detailPackage = new DetailPackage();
        $detailPackage->feature = 'Finding and Living Your Purpose';
        $detailPackage->package_id = $package->id;
        $detailPackage->save();

    }
}
