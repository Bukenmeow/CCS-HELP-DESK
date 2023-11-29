<div class="w-full rounded-lg bg-blue-600/70 px-6 md:px-10 dark:bg-blue-950/70">
    <div class="ml-10 my-9 text-3xl font-bold text-blue-800">
        <h1>TRANSACTION HISTORY</h1>
    </div>
    <div class="flex columns-2 ml-20 text-xl">
        <div>
            <p>NAME OF STUDENT</p>
            <p>STUDENT NUMBER</p>
            <p>YEAR AND SECTION</p>
        </div>
        <div class="font-bold">
            <p class="text-white">
                {{ substr(Auth::user()->email, 0, strpos(Auth::user()->email, '@')) }}
            </p>
            <span
                class="text-white"
                x-data="{ capitalize: function(value) { return value.charAt(0).toUpperCase() + value.slice(1); } }"
            >
                <table>
                    <tr>
                        <td
                            class="text-2xl text-gray-800 dark:text-gray-200"
                            x-data="{ firstname: '{{ ucfirst(auth()->user()->firstname) }}' }"
                            x-text="capitalize(firstname)"
                            x-on:profile-updated.window="firstname = capitalize($event.detail.firstname)"
                        ></td>
                        @if (Auth::user()->middlename)
                        <td>&nbsp;</td>
                        <td
                            class="text-2xl text-gray-800 dark:text-gray-200"
                            x-data="{ middlename: '{{ ucfirst(substr(auth()->user()->middlename, 0, 1)) }}.' }"
                            x-text="middlename"
                            x-on:profile-updated.window="middlename = $event.detail.middlename ? capitalize($event.detail.middlename[0]) + '.' : ''"
                        ></td>
                        @endif
                        <td>&nbsp;</td>
                        <td
                            class="text-2xl text-gray-800 dark:text-gray-200"
                            x-data="{ lastname: '{{ ucfirst(auth()->user()->lastname) }}' }"
                            x-text="capitalize(lastname)"
                            x-on:profile-updated.window="lastname = capitalize($event.detail.lastname)"
                        ></td>
                    </tr>
                </table>
            </span>
            <p>{{ Auth::user()->section }}</p>
        </div>
    </div>

    <table class="mt-12 w-[91%] ml-20 h-10 text-2xl text-white">
        <!-- Table header -->
        <thead>
            <tr class="border-4 border-black">
                <th class="p-10 text-center border-4 border-black">DATE</th>
                <th class="p-10 text-center border-4 border-black">DOCUMENT</th>
                <th class="p-10 text-center border-4 border-black">AMOUNT</th>
                <th class="p-10 text-center border-4 border-black">STATUS</th>
                <th class="p-10 text-center border">RECEIPT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactionHistory as $item)
            <tr class="border-4 border-black">
                <td class="p-10 text-center border-4 border-black">
                    {{ $item->created_at }}
                </td>
                <td class="p-10 text-center border-4 border-black">
                    {{ $item->document }}
                </td>
                <td class="p-10 text-center border-4 border-black">
                    {{ $item->amount }}
                </td>
                <td class="p-10 text-center border-4 border-black">
                    {{ $item->status }}
                </td>
                <td class="p-10 text-center text-blue-700">
                    <u href="#" class="cursor-pointer">VIEW RECEIPT</u>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $transactionHistory->links() }}

    <div class="mt-10 ml-[80%]">
        <button
            type="button"
            class="text-white text-xl font-bold rounded-full py-2 px-12 cursor-pointer bg-indigo-900 hover:bg-indigo-950"
        >
            CONTINUE
        </button>
    </div>
</div>
