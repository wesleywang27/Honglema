@extends('star.star')
@section('back', 'create_star')
@section('title', $input_tag)
@section('header_handle','<a h>')
    <div>
        <form method="post" action="edit_">
            <select name="day" id="day">
                <option value="mon">星期一</option>
                <option value="tue">星期二</option>
                <option value="wed">星期三</option>
                <option value="thu">星期四</option>
                <option value="fri">星期五</option>
                <option value="sat">星期六</option>
                <option value="sun">星期日</option>
            </select>
            </form>
    </div>