<h1>this is the list of customers</h1>


<ul>
    @foreach ($customers as $customer)
        <li>{{ $customer }}</li>
    @endforeach
</ul>
