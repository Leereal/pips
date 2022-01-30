<tr>
    <td>Bitcoin</td>
    <td>BTC</td>
    <td>
        @if ($moresettings->btc == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->btc == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'btc', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'btc', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Ethereum</td>
    <td>ETH</td>
    <td>
        @if ($moresettings->eth == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->eth == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'eth', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'eth', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Litecoin</td>
    <td>LTC</td>
    <td>
        @if ($moresettings->ltc == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->ltc == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'ltc', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'ltc', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Chainlink</td>
    <td>LINK</td>
    <td>
        @if ($moresettings->link == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->link == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'link', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'link', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Binance Coin</td>
    <td>BNB</td>
    <td>
        @if ($moresettings->bnb == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->bnb == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'bnb', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'bnb', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Aave</td>
    <td>AAVE</td>
    <td>
        @if ($moresettings->aave == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->aave == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'aave', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'aave', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Tether</td>
    <td>USDT</td>
    <td>
        @if ($moresettings->usdt == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->usdt == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'usdt', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'usdt', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Bitcoin Cash</td>
    <td>BCH</td>
    <td>
        @if ($moresettings->bch == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->bch == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'bch', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'bch', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Ripple</td>
    <td>XRP</td>
    <td>
        @if ($moresettings->xrp == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->xrp == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'xrp', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'xrp', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Stellar</td>
    <td>XLM</td>
    <td>
        @if ($moresettings->xlm == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->xlm == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'xlm', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'xlm', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>
<tr>
    <td>Ada</td>
    <td>ADA</td>
    <td>
        @if ($moresettings->ada == 'enabled')
        <span class="badge badge-success">enabled </span>
        @else
        <span class="badge badge-danger">disabled</span>
        @endif
    </td>
    <td>
        @if ($moresettings->ada == 'enabled')
        <a href="{{route('setassetstatus', ['asset' => 'ada', 'status'=> 'disabled'])}}" class="btn btn-danger btn-sm">Disable</a>
        @else
        <a href="{{route('setassetstatus', ['asset' => 'ada', 'status'=> 'enabled'])}}" class="btn btn-success btn-sm">Enable</a>
        @endif
    </td>
</tr>