@extends('layouts.app')

@section('content')
<div class="h-full w-full">
    <div class=" h-[500px] bg-[#005260] ">
        <div class=" px-11 py-11">
            <div class="flex justify-between">
                <div class="csifont text-[64px] text-white ">Computer
                    Society<br /> Of India<span class="ml-1 text-[10px]
                        text-center align-middle">GVPCE | Student
                        Branch</span></div>
                <div class="logo flex w-[15%] h-[15%]"><img src="./assets/logo.png" alt=""
                        srcset=""></div>
            </div>
            <div class="flex">
                <div class="csifont mr-1 text-[64px] text-white ">WE</div>
                <div class="scroller csifont text-white text-[64px]">
                    <span>
                        Create.<br/>
                        Innovate.<br/>
                      Share.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center " style="background: linear-gradient(to bottom, #005260 50% , #F1EBE4 50%);">
        <div class="w-[997px] h-[423px] shadow-2xl bg-white rounded-xl">
            <div class="container">
                <div class="slider">
                    <div class="owl-carousel">
                        <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('carousel/images/slide-1.jpg')}}" alt="" >
                            </div>
                            <h5 class="mb-0 text-center"><b>HTML CSS3 Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('carousel/images/slide-2.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Wordpress Tutorials</b></h5>
                            <p class="text-center p -4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('carousel/images/slide-3.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>PHP MySQL Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('carousel/images/slide-4.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Javascript Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                        <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('carousel/images/slide-5.jpg')}}" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Bootstrap Tutorials</b></h5>
                            <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#F1EBE4] h-[300px]">3</div>
</div>

@endsection

