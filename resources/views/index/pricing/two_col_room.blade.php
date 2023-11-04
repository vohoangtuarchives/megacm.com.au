<div class="pricing-detail-table">
    <div class="tab-content">
        <table>
            <tbody>
            <tr>
                <th>{{ $title }}</th>
                <th>Pricing</th>
            </tr>
            @for($i = 1; $i <= $rooms;$i++)
            <tr>
                <td>{{$i}} Room</td>
                <td>${{ $i * 110 }}</td>
            </tr>
            @endfor

            <tr>
                <td>Upholstery Cleaning</td>
                <td>Click below for a custom quotation</td>
            </tr>
            <tr>
                <td></td>
                <td class="link"><a href="book-now">BOOK NOW</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>