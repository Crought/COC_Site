<a href="{{route("scenario.detail", ['id' => $scenario->id])}}">
    <table>
        <tbody>
        <p>{{$scenario->title}}/{{$scenario->contributor}}</p>
        <tr>
            <th>プレイ人数</th>
            <th>プレイ時間</th>
            <th>KP難易度</th>
            <th>PL難易度</th>
            <th>投稿日</th>
            <th>タグ</th>
        </tr>
        <tr>
            <td>{{$scenario->player_number}}</td>
            <td>{{$scenario->playing_time}}時間程度</td>
            <td>{{$scenario->keeper_technique}}</td>
            <td>{{$scenario->player_technique}}</td>
            <td>{{$scenario->created_at}}</td>
            <td>{{$scenario->scenario_tag_id}}</td>
        </tr>
        <tr>
            <td colspan="7">{{$scenario->description}}</td>
        </tr>
        </tbody>
    </table>
</a>