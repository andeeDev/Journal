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
?>
<main class="page">
        <div class="row expanded">
            <div class="small-12 columns">
                <div class="callout clearfix paddings">
                    <h5 class="callout cabinet small clearfix margin-bottom">
                        {{$groupName->name}}
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
<?php

?>


@include('footer')

