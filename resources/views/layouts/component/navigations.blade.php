<ul>
    <li class="{{ ($menu=='test_1')?'active':'' }}">
        <a href="{{ route('test1.index') }}">Test 1</a>
    </li>
    <li>
    <li class="{{ ($menu=='test_2')?'active':'' }}">
        <a href="{{ route('test2.index') }}">Test 2</a>
    </li>
</ul>