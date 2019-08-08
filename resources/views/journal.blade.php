@include('header')
<?php
use Carbon\Carbon;

    $dd = new DateTime('now', new DateTimeZone('Europe/Kiev'));
    $timePoint = $dd->diff(new DateTime(null, new DateTimeZone('Europe/Kiev')));
    /*echo Carbon::now()->subDays(rand(1, 5));
    echo Carbon::now()->subDays(rand(1, 5));*/
    $faker = Faker\Factory::create();
    //echo \App\Models\Student::where('group_id', '=', 1)->with('classes')->get()[0];
    //echo \App\Models\Student::find(1)->classes()->get()->count();
$point = \App\Models\Point::find(12);
$point->created_by = date('Y-m-d H:i:s');
$point->updated_by = date('Y-m-d H:i:s');
$point->point = 5;
$point->save();
echo $point;
?>


<main class="page">
        <div class="row expanded">
            <div class="small-12 columns">
                <div class="callout clearfix paddings">
                    <h5 class="callout cabinet small clearfix margin-bottom">
                        {{$groupName->name}}
                        <span id="animation">

                            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                  <animateTransform
                                          attributeName="transform"
                                          attributeType="XML"
                                          type="rotate"
                                          dur="1s"
                                          from="0 50 50"
                                          to="360 50 50"
                                          repeatCount="indefinite" />
                              </path>
                            </svg>
                        </span>

                        {{--<svg id="oksvg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                            <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                            <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                        </svg>


                        <svg id="errsvg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                            <circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                            <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
                            <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
                        </svg>--}}
                        <span id="bm"> </span>

                    </h5>

                    <div class="show-for-medium table-scroll">
                        <table class="m-b-n b-none custom edit-table">
                            <thead class="text-center">
                                <tr>


                                <th>ПІБ</th>
                                    {{--{{$studentAndMark[0]->classes}}--}}

                                    @foreach($studentAndMark[0]->classes as $clazz)
                                        {{--{{$clazz}}--}}
                                        <th>{{ date('d.m',strtotime($clazz->datetime))}}</th>

                                    @endforeach


                                <th>30.03</th>
                                <th>Тест</th>
                                <th>Сумма</th>
                            </tr>
                        </thead>
                            <tbody>
                            @php ($timePoint = new DateTime( 'now' , new DateTimeZone('Europe/Kiev')))
                                @foreach( $studentAndMark as $student )
                                    <tr class="text-center">
                                        <td class="" style="text-align:left">
                                            {{$student->surname.' '.$student->name }}
                                        </td>

                                        {{--{{$timePoint->diff(new DateTime($student->classes[0]->pivot->created_by, new DateTimeZone('Europe/Kiev')))->d}}--}}
                                        @foreach($student->classes as $class)

                                            {{--{{ $timePoint->diff(new DateTime($points->created_at, new DateTimeZone('Europe/Kiev')))->format('%h %d %R') }}--}}
                                            @if( $timePoint->diff(new DateTime($class->pivot->updated_by, new DateTimeZone('Europe/Kiev')))->d < 1 )
                                                <td>
                                                    <div style="display:flex;justify-content: center;align-items: center;">
                                                        <input type="text" name="{{sha1($class->tch_id."andee".$class->pivot->id)}}" maxlength="2" value="{{$class->pivot->point}}" data-uri="{{$class->pivot->id}}/{{$class->tch_id}}">
                                                    </div>
                                                </td>
                                            @else
                                                <td>
                                                    <div style="display:flex; justify-content: center; align-items: center;">
                                                        <span style="text-align: center;">{{$class->pivot->point}}</span>
                                                    </div>
                                                </td>
                                            @endif
                                        @endforeach
                                        {{--<td>
                                            <div><input type="text" maxlength="2" value="" data-uri="/1/1/1"></div>
                                        </td>
                                        <td>
                                            <div style="display:flex;justify-content: center;align-items: center;" >4</div>
                                        </td>
                                        <td>
                                            <div style="display:flex;justify-content: center;align-items: center;" >4</div>
                                        </td>--}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
{{--<script type="text/javascript" src="{{ asset('/js/calculateSumForStudent.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.7/lottie.min.js" integrity="sha256-fRn4wIlEuPBJxI2Uoz/0Scjro4dAMp7wapNneqEb1l8=" crossorigin="anonymous"></script>
<script src="{{asset('/js/loadAnimation.js')}}" type="text/javascript"></script>



@include('footer')

<script type="text/javascript" src="{{asset('/js/ajaxSave.js')}}"></script>
