@extends('layouts.app')

@section('content')
    <div class="h-full w-full">
        <div class="py-11  bg-[#005260] ">
            <div class=" px-11 py-11">
                <div class="flex justify-between">
                    <div class="csifont text-[64px] text-white ">Computer
                        Society<br /> Of India</div>
                    <div class="logo flex w-[15%] h-[15%]">
                        <img src="{{ asset('images/logogif2.gif') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="flex">
                    <div class="csifont mr-1 text-[64px] text-white font-extrabold">WE<span
                            class="ml-2 text-[32px]
                    text-center align-middle">GVPCE | Student
                            Branch</span></div>
                </div>
            </div>

            <div class="csifont  flex justify-center items-center ">

                <div class="w-5/12 mt-20">
                    <div class="text-[24px] text-[#DADADA] text-center">About CSI</div>
                    <div class="text-center mt-3 text-white">
                        <p>CSI Student Branch is one of the active technical society of</p>
                        <p>Gayatri Vidya Parishad College of Engineering College Vizag</p>
                    </div>
                    <div class="text-center mt-3 text-white">
                        SB aims for the betterment of every student of the college who wishes to have professional knowledge
                        in the field of Information Technology. The society will always work for the betterment of students
                        along with the progress of GECBH to achieve greater heights.
                    </div>
                </div>

            </div>

            <div class="text-center mt-11 text-[48px] text-[#FFFFFFB8]">Upcoming Events</div>

            <div class="flex mt-4 pb-20 justify-center bg-[#005260]">

                <div class="w-[997px] h-[423px] shadow-2xl bg-white rounded-xl">
                    <div class="container">
                        <div class="slider">
                            <div class="owl-carousel">
                                <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                                    <div class="image d-flex justify-content-center align-items-center mb-4">
                                        <img class="rounded-xl" src="http://127.0.0.1:8000/carousel/images/slide-1.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b>HTML CSS3 Tutorials</b></h5>
                                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.
                                    </p>
                                </div>
                                <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                                    <div class="dimage -flex justify-content-center align-items-center mb-4">
                                        <img class="rounded-xl" src="http://127.0.0.1:8000/carousel/images/slide-2.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b>Wordpress Tutorials</b></h5>
                                    <p class="text-center p -4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.
                                    </p>
                                </div>
                                <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                                    <div class="image d-flex justify-content-center align-items-center mb-4">
                                        <img class="rounded-xl" src="http://127.0.0.1:8000/carousel/images/slide-3.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b>PHP MySQL Tutorials</b></h5>
                                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.
                                    </p>
                                </div>
                                <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                                    <div class="image d-flex justify-content-center align-items-center mb-4">
                                        <img class="rounded-xl" src="http://127.0.0.1:8000/carousel/images/slide-4.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b>Javascript Tutorials</b></h5>
                                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.
                                    </p>
                                </div>
                                <div style="width: 19rem; height: 25rem;" class="bg-[#005260] text-white slider-card">
                                    <div class="image d-flex justify-content-center align-items-center mb-4">
                                        <img class="rounded-xl" src="http://127.0.0.1:8000/carousel/images/slide-5.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b>Bootstrap Tutorials</b></h5>
                                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#D9D9D9] py-10 flex justify-center items-center ">
                <div class=" w-full">
                    <div class="title afont text-center text-[40px] text-[#1C1717]">Key Note</div>
                    <div class="cards flex justify-evenly">
                        <div class="w-3/12 m-7 h-6/6  bg-[#028194] rounded-md">
                            <div class="h-5 rounded-t-md shadow-md bg-[#005260]"></div>
                            <div class="p-3">
                                <div class="text-center text-xl p-5 afont text-[#FFFFFFB8]">
                                    <span class="text-[32px] font-bold font-italic">“</span>The Path lighted out by my guru and mentor Late prof. Krishnan kutty rightly set us to
                                    unleash our creative potential and all credits goes to my lovely students who make it all
                                    happen
                                    amidst the pandemic.<span class="text-2xl font-bold font-italic">“ </span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex rounded-full w-16 h-16  overflow-auto">
                                        <img src="{{ asset('carousel/images/slide-1.jpg') }}" alt="" srcset="">
                                    </div>
                                </div>

                                <div class="text-[16px] afont text-[#FFFFFFB8] font-semibold text-center">P Karthik</div>
                                <div class="text-[14px] afont text-[#FFFFFFB8] text-center">Student Branch Counsellor</div>
                            </div>
                        </div>

                        <div class="w-3/12 m-7 h-6/6  bg-[#028194] rounded-md">
                            <div class="h-5 rounded-t-md shadow-md bg-[#005260]"></div>
                            <div class="p-3">
                                <div class="text-center text-xl p-5 afont text-[#FFFFFFB8]">
                                    <span class="text-[32px] font-bold font-italic">“</span>The Path lighted out by my guru and mentor Late prof. Krishnan kutty rightly set us to
                                    unleash our creative potential and all credits goes to my lovely students who make it all
                                    happen
                                    amidst the pandemic.<span class="text-2xl font-bold font-italic">“ </span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex rounded-full w-16 h-16  overflow-auto">
                                        <img src="{{ asset('carousel/images/slide-1.jpg') }}" alt="" srcset="">
                                    </div>
                                </div>

                                <div class="text-[16px] afont text-[#FFFFFFB8] font-semibold text-center">P Karthik</div>
                                <div class="text-[14px] afont text-[#FFFFFFB8] text-center">Student Branch Counsellor</div>
                            </div>
                        </div>

                        <div class="w-3/12 m-7 h-6/6  bg-[#028194] rounded-md">
                            <div class="h-5 rounded-t-md shadow-md bg-[#005260]"></div>
                            <div class="p-3">
                                <div class="text-center text-xl p-5 afont text-[#FFFFFFB8]">
                                    <span class="text-[32px] font-bold font-italic">“</span>The Path lighted out by my guru and mentor Late prof. Krishnan kutty rightly set us to
                                    unleash our creative potential and all credits goes to my lovely students who make it all
                                    happen
                                    amidst the pandemic.<span class="text-2xl font-bold font-italic">“ </span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex rounded-full w-16 h-16  overflow-auto">
                                        <img src="{{ asset('carousel/images/slide-1.jpg') }}" alt="" srcset="">
                                    </div>
                                </div>

                                <div class="text-[16px] afont text-[#FFFFFFB8] font-semibold text-center">P Karthik</div>
                                <div class="text-[14px] afont text-[#FFFFFFB8] text-center">Student Branch Counsellor</div>
                            </div>
                        </div>

                        <div class="w-3/12 m-7 h-6/6  bg-[#028194] rounded-md">
                            <div class="h-5 rounded-t-md shadow-md bg-[#005260]"></div>
                            <div class="p-3">
                                <div class="text-center text-xl p-5 afont text-[#FFFFFFB8]">
                                    <span class="text-[32px] font-bold font-italic">“</span>The Path lighted out by my guru and mentor Late prof. Krishnan kutty rightly set us to
                                    unleash our creative potential and all credits goes to my lovely students who make it all
                                    happen
                                    amidst the pandemic.<span class="text-2xl font-bold font-italic">“ </span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex rounded-full w-16 h-16  overflow-auto">
                                        <img src="{{ asset('carousel/images/slide-1.jpg') }}" alt="" srcset="">
                                    </div>
                                </div>

                                <div class="text-[16px] afont text-[#FFFFFFB8] font-semibold text-center">P Karthik</div>
                                <div class="text-[14px] afont text-[#FFFFFFB8] text-center">Student Branch Counsellor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-14 pb-6">
                <div class="tech  bg-black">
                    <div class="blocks bg-[#005260] flex justify-evenly">
                        <div class="block1 bg-[#005260] w-3/12 h-8"></div>
                        <div class="block2 bg-black rounded-t-[40px] w-3/12 h-8"></div>
                        <div class="block3 bg-[#005260] w-3/12 h-8"></div>
                    </div>
                    <div class="heading flex text-white text-3xl font-mono justify-evenly">What We Learn</div>
                    <div class="stacks bg-black flex justify-evenly pt-[50px] mb-[50px] pb-[50px]">
                        <div class="icon">
                            <i class="text-white text-5xl fa fa-github"></i>
                        </div>
                        <div class="icon">
                            <i class="text-white text-5xl fa fa-github"></i>
                        </div>
                        <div class="icon">
                            <i class="text-white text-5xl fa fa-github"></i>
                        </div>
                        <div class="icon">
                            <i class="text-white text-5xl fa fa-github"></i>
                        </div>
                        <div class="icon">
                            <i class="text-white text-5xl fa fa-github"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why text-white flex justify-center">
                <div class="question text-3xl text-center">
                    <div>Why should you join CSI ?</div>
                    <div class="text-2xl m-10 w-[700px]">
                        By being the part of the events, you can improve your technical
                        skills as well as your soft skills
                    </div>
                    <div class="m-10">
                        <a class="bg-white text-black font-mono rounded p-2" href="#">JOIN CSI</a>
                    </div>
                </div>
            </div>
            <div class="flex bg-black justify-between text-white">
                <div class="contact w-2/12 text-end ml-[75px] text-2xl -rotate-90"><span
                        class="border-l border-white opacity-50 p-2">Contact Us</span></div>
                <div class="csi_page m-3">
                    <div class="mr-[40%] ml-[22%] text-center">
                        <div class="text-3xl m-2">Computer Society Of India</div>
                        <div class="text-2xl mt-5 opacity-75">Our Mission</div>
                        <div class="m-2 opacity-25">Our Mission is to facilitate research,
                            knowledge sharing, learning and career enhancement for all categories
                            of IT Professionals, while simultaneously inspiring and nurturing new
                            entrants into the industry and helping them to integrate into the IT community.
                        </div>
                        <div class="social flex justify-evenly">
                            <div class="icon">
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="icon">
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="icon">
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="icon">
                                <i class="fa fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
