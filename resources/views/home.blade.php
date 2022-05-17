@extends('layouts.home')

@section('container')
<div class="py-3">
    <div class="align-items-center ">
        <div class="col-auto ">
            <img src="assets/app-img/home02.jpg" class="d-block mx-lg-auto img-fluid" alt="Hotel Image 02" style="width:1200px; height:400px;" loading="lazy">
        </div>

        <div class="w-90 input-group mb-3 input-group-sm mt-5">
            <input type="date" class="form-control sm" style="margin-right:10px; height:50px;" name="date1" value="{{ request('date1') }}">
            <input type="date" class="form-control sm" style="margin-right:10px; height:50px;" name="date2" value="{{ request('date2') }}">
            <a href="booking">
                <button class="btn btn-outline-secondary" style="margin-right:10px; height:50px;" type="submit">Book Now!</button>
            </a>
        </div>
    </div>
</div>

<div class="card" style="border-radius: 15px; opacity: 75%;">
    <div class="container">
        <div class="col-auto mt-5">
            <h2 class="display-8" style="text-align:center;">Tentang Kami</h2>
            <p class="lead mt-3" style="text-align: justify; text-indent: 0.5in;">Semount Hotel Malang is part of the management of Discovery Hotels & Resorts. Discovery Hotels & Resorts Management is an organization of hotel and tourism business people who are experienced in their fields. Management provides consulting services for well-known hotels and resorts. Moreover, the management also offers full services for opening new properties and rebranding existing hotels.
                </br>
            </p>
            <p class="lead mt-3 mb-5" style="text-align: justify; text-indent: 0.5in;">Semount Hotel Malang is the only hotel in Malang that offers 9 hectares of lush tropical gardens to its guests. The hotel is also committed to taking part in eco-friendly conservation programs and was recently awarded a charter from the TUV Rheinland Group (Germany), from the Indonesian Ministry of Tourism and Creative Economy</p>
        </div>
    </div>
</div>


@endsection