<div>
    <div class="row">
        <div class="col-12">
            <div class="h4 text-blue">@lang('School Location Information')</div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="w-100">

                        <x-jet-validation-errors class="mb-4 alert alert-danger"/>
                        @if (session('status'))
                            <div class="mb-4 font-medium alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @php
                            /**
                            * @var \App\Models\Institutes\School $school;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  */
                        @endphp
                        <form class="mt-3" method="post" wire:submit.prevent="save" onkeydown="return event.key != 'Enter';">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="h7 text-blue mb-3">School location and branches location</div>
                                    <div class="h6 text-blue mb-3">Main branch</div>
                                    @php
                                        /**
                                        * @var \Illuminate\Database\Eloquent\Collection<\App\Models\General\Countries> $countries
                                        * @var \Illuminate\Database\Eloquent\Collection<\App\Models\General\Cities> $cities
                                        */
                                    @endphp
                                    <select wire:model="country_id" name="country_id" class="text-start form-control input-field" aria-label="" wire:change="loadCities">
                                        <option value=""> Select Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>

                                    <p wire:loading.block wire:target="loadCities" class="mt-3 start form-control input-field" aria-label="" style="font-size: small ">
                                        <i class="fas fa-spinner fa-pulse" aria-hidden="true"></i> Loading Cities...
                                    </p>
                                    <div wire:loading.class="d-none" wire:target="loadCities">
                                        <select   wire:model="city_id" name="city_id" class="mt-3 start form-control input-field" aria-label="">
                                            <option value=""> Select City</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}">{{$city->city_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-container">
                                        <input name="address1" id="address1" wire:model.lazy="address1" type="text"
                                               placeholder="Pick Location or Start Typing"
                                               class="input-field form-control input-field mt-3">
                                        <i class="fa fa-location-pin icon"></i>
                                    </div>

                                    <input type="hidden" id="latitude" name="latitude" wire:model="latitude"
                                           class="form-control">

                                    <input type="hidden" name="longitude" id="longitude"
                                           class="form-control" wire:model="longitude">
                                </div>
                                <div class="col-lg-6 mb-3 mobile-marg-2">
                                    <p class="text-muted">Please add the main School Branch First, in case the
                                        school has more other
                                        branches and you would like to create fair in these branches please ad
                                        them one by one below the
                                        main branch.</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <button type="submit" class="button-dark-blue width-25 button-sm mobile-btn" wire:loading.attr="disabled">@lang('Save')
                                        </button>
                                        <button type="button" class="button-red width-25 button-sm mobile-btn" wire:loading.attr="disabled"
                                                wire:click="setData">@lang('Cancel')</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <div wire:loading.block wire:target="save"> <i class="fas fa-spinner fa-pulse" aria-hidden="true"></i> Saving Data...</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push(AppConst::PUSH_JS)
        <script type="text/javascript"
                src="https://maps.google.com/maps/api/js?key={{ config('services.google.map.key') }}&libraries=places"></script>
        <script>
            loadMap();


            Livewire.on('loadMap', () => {
                loadMap();
            })

            function loadMap(){
                google.maps.event.addDomListener(window, 'load', initialize);
            }

            function initialize() {

                var input = document.getElementById('address1');
                var autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.addListener('place_changed', function () {
                    var place = autocomplete.getPlace();
                    $('#latitude').val(place.geometry['location'].lat());
                    $('#longitude').val(place.geometry['location'].lng());
                });
            }
        </script>
    @endPush
</div>

