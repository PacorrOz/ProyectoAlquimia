<p> Cambio </p>


@if(isset($cambio))
    <table>
        <tr>
            <td>500</td>
            <td>200</td>
            <td>100</td>
            <td>50</td>
            <td>20</td>
            <td>10</td>
            <td>5</td>
            <td>2</td>
            <td>1</td>
        </tr>
        <tr>
            @foreach ($cambio as $cambios)
                <td> {{ $cambios }}</td>
            @endforeach
        </tr>
    </table>
@endif
@if(isset($error_msg))
    <p> {{ $error_msg }} </p>
@endif