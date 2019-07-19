@include('header')
<?php
    //echo $dateTime->format('Y-m-d H:i:s') . "\n";
    $dd = new DateTime('now', new DateTimeZone('Europe/Kiev'));
    $timePoint = $dd->diff(new DateTime(null, new DateTimeZone('Europe/Kiev')));

    //dd(new DateTime(null, new DateTimeZone('Europe/Kiev')));
    //$dd->setTimezone(new DateTimeZone('Europe/Kiev'));
    //echo 'dd = '.$dd->format('Y-m-d H:i:s');
//$timestamp = strtotime('+7 days', new DateTime());
$class = \App\Models\Student::find(1)->points()->get();
echo $class;
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
                                    @foreach($dates as $date)
                                        <th>{{date('d.m',strtotime($date->datetime))}}</th>
                                    @endforeach
                                    <th>30.03</th>
                                    <th>Тест</th>
                                    <th>Сумма</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{--@php ($timePoint = new DateTime( 'now' , new DateTimeZone('Europe/Kiev')))
                                {{$timePoint->format('Y-m-d H:i:s')}}
                                {{$studentAndMark}}
                                @foreach( $studentAndMark as $student )
                                    <tr class="text-center">
                                        <td class="" style="text-align:left">
                                            {{$student->surname.' '.$student->name }}
                                        </td>
                                        @foreach($student->points as $points)
                                            {{ $timePoint->diff(new DateTime($points->created_at, new DateTimeZone('Europe/Kiev')))->format('%h %d %R') }}
                                            @if( $timePoint->diff(new DateTime($points->created_at, new DateTimeZone('Europe/Kiev')))->d < 1 )
                                                --}}{{--{{ $dd->diff($points->created_at)->d }}--}}{{--
                                                --}}{{--{{$points->created_at}}
                                                {{date('Y-m-d H:i:s', strtotime($dateTime))}}--}}{{--
                                                <td>
                                                    <div style="display:flex;justify-content: center;align-items: center;">
                                                        <input type="text" maxlength="2" value="{{$points->point}}" data-uri="/1/1/1">
                                                    </div>
                                                </td>
                                            @else
                                                <td>
                                                    <div style="display:flex; justify-content: center; align-items: center;">
                                                        <span style="text-align: center;">{{$points->point}}</span>
                                                    </div>
                                                </td>
                                            @endif
                                        @endforeach
                                        <td>
                                            <div><input type="text" maxlength="2" value="" data-uri="/1/1/1"></div>
                                        </td>
                                        <td>
                                            <div style="display:flex;justify-content: center;align-items: center;" >4</div>
                                        </td>
                                        <td>
                                            <div style="display:flex;justify-content: center;align-items: center;" >4</div>
                                        </td>
                                    </tr>
                                @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script type="text/javascript" src="{{ asset('/js/calculateSumForStudent.js') }}"></script>
<?php
//echo $studentAndMark;
//    $students_and_marks = App\Models\Student::with('points')->where('group_id', '=', 1)->get();
//    echo $students_and_marks->first()->points;

?>


@include('footer')

