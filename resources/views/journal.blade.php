@include('header')
    <main class="page">
        <div class="row expanded">
            <div class="small-12 columns">
                <div class="callout clearfix paddings">
                    <h5 class="callout cabinet small clearfix margin-bottom">
                        ІН-71
                    </h5>
                    <div class="show-for-medium table-scroll">
                        <table class="m-b-n b-none custom edit-table">
                            <thead class="text-center">
                                <tr>
                                    <th>ПІБ</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>30.03</th>
                                    <th>01.04</th>
                                    <th>01.04</th>
                                    <th>01.04</th>
                                    <th>Тест</th>
                                    <th>Сумма</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $students  as $st )
                                    <tr class="text-center">
                                        <td class="" style="text-align:left">{{$st->surname.' '.$st->name }}</td>
                                        @foreach( $classes as $class )
                                            <td>
                                                <div><input type="text" maxlength="2"></div>
                                            </td>
                                        {{--<td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
                                        </td>
                                        <td>
                                            <div><input type="text" maxlength="2"></div>
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
@include('footer')

