<div>
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>My Wallet <br><strong><sup>$</sup>{{ $myWallet->wallet }}</strong></h3>
                    </div>
                    <h5 class="content">Youre Refferal Code : {{ Auth::user()->self_reveral }} </h5>
                    <div class="accordion-list">
                        <ul>
                            @foreach ($levelReferalls as $index => $item)
                            <li>
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-{{ $index }}"><span>{{ $index+1 }}</span>{{$item->userUse->name}}<i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-{{ $index }}" class="collapse "
                                    data-bs-parent=".accordion-list">
                                    Your Bonus Referall code :
                                    <h4>
                                        $ {{$item->bonus_log}}
                                    </h4>
                                    <p>
                                        Presentage :
                                        {{$item->percent}}% Bonus Refellar code
                                    </p>
                                    <p>
                                       Date :  {{$item->date}}
                                    </p>


                                </div>

                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("{{asset('Arsha/assets/img/why-us.png')}}");' data-aos="zoom-in"
                    data-aos-delay="150">&nbsp;


                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->
</div>
