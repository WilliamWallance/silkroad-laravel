@extends('layouts.app')

@section('content')
    <div class="container max-w-4xl mx-auto md:flex items-start py-8 px-12 md:px-0">

        <!-- articles -->
        <div class="w-full md:pr-12 mb-12">
            Body
        </div>
        <!--/ articles -->

        <!-- sidebar -->
        <div class="w-full md:w-64">

            <aside class="rounded shadow overflow-hidden mb-6">
                <h3 class="text-sm bg-gray-100 text-gray-700 py-3 px-4 border-b">Categories</h3>

                <div class="p-4">
                    <ul class="list-reset leading-normal">
                        <li><a href="#" class="text-gray-darkest text-sm">Uncategorised</a></li>
                        <li><a href="#" class="text-gray-darkest text-sm">Food &amp; Drink</a></li>
                        <li><a href="#" class="text-gray-darkest text-sm">Garden</a></li>
                        <li><a href="#" class="text-gray-darkest text-sm">Tools</a></li>
                    </ul>
                </div>
            </aside>

            <aside class="rounded shadow overflow-hidden mb-6">
                <h3 class="text-sm bg-gray-100 text-gray-700 py-3 px-4 border-b">Latest Posts</h3>

                <div class="p-4">
                    <ul class="list-reset leading-normal">
                        <li><a href="#" class="text-gray-darkest text-sm">Lorem ipsum dolor sit amet.</a></li>
                        <li><a href="#" class="text-gray-darkest text-sm">Sit amet, consectetur adipisicing elit.</a></li>
                        <li><a href="#" class="text-gray-darkest text-sm">Lorem ipsum dolor sit amet.</a></li>
                        <li><a href="#" class="text-gray-darkest text-sm">Sit amet, consectetur adipisicing elit.</a></li>
                    </ul>
                </div>
            </aside>

        </div>
        <!-- /sidebar -->

    </div>
@endsection
