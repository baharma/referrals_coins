<div class="row">
    @foreach ($reveral as $item)
    <div class="col" data-aos="fade-up" data-aos-delay="100">
        <div class="box">
            <h3>{{$item->plans}}</h3>
            <h4><sup>$</sup>{{$item->price}}<span>per month</span></h4>
            <ul>
                <li>
                    {{$item->description}}
                </li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
        </div>
    </div>
    @endforeach

</div>
