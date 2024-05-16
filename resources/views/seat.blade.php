@extends('layouts.template')

@section('content')
    <div class="flex items-center justify-center flex-col">
        <h1 class="text-2xl font-bold text-indigo-500">{{ $movie->name }} ({{ $movie->studio_name }})</h1>
        <p class="text-lg">{{ $date }} <span class="mx-5">|</span> {{ $time }}</p>
    </div>
    {{--menampilkan tampilan movie|studio dan date|time--}}
    <div class="grid md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-2 sm:grid-cols-1 mt-5 gap-4">
        <?php $i = "A" ?>
        @for($r = 0; $r < $movie->studio_capacity / 12; $r++)
            <div class="flex flex-nowrap items-center justify-evenly">
                @for($c = 1; $c <= 6; $c++)
                    @php 
                        $col1 = $i . ($c < 10 ? '0' . $c : $c);
                        $disabled = false;
                        foreach ($history as $ticket) {
                            if (in_array($col1, explode(',', $ticket->seat))) {
                                $disabled = true;
                                break;
                            }
                        }
                    @endphp
                    <button class="seat {{ $disabled ? 'seat-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} name="seat" value="{{ $col1 }}">
                        {{ $col1 }}
                    </button>
                @endfor
            </div>
            <div class="flex flex-nowrap items-center justify-evenly">
                @for($c = 7; $c <= 12; $c++)
                    @php 
                        $col2 = $i . ($c > 9 ? $c : '0' . $c);
                        $disabled = false;
                        foreach ($history as $ticket) {
                            if (in_array($col2, explode(',', $ticket->seat))) {
                                $disabled = true;
                                break;
                            }
                        }
                    @endphp
                    <button class="seat {{ $disabled ? 'seat-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} name="seat" value="{{ $col2 }}">
                        {{ $col2 }}
                    </button>
                @endfor
            </div>
            <?php $i++; ?>
        @endfor
    </div>
    <div class="flex items-center justify-center mt-12">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="bg-indigo-500 text-dark-100 py-2 px-3 rounded shadow-md hover:bg-indigo-400 disabled:bg-indigo-300 disabled:cursor-not-allowed" id="confirm">Buat Pesanan</button>
    </div>
    
    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Confirm Of Order
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="/seat/order" method="POST" class="p-4 md:p-8">
                    @csrf
                    <div class="grid gap-4 mb-4">
                        <div class="flex">
                            <label class="w-6/12">Movie</label>
                            <h1>{{ $movie->name }}</h1>
                            <input type="hidden" name="movie" value="{{ $movie->name }}">
                        </div>
                        <div class="flex">
                            <label class="w-6/12">Time</label>
                            <h1>{{ $time }}</h1>
                            <input type="hidden" name="time" value="{{ $time }}">
                        </div>
                        <div class="flex">
                            <label class="w-6/12">Seat</label>
                            <h1 id="seat-selected-h1"></h1>
                            <input type="hidden" name="seat" id="selected-seats" class="seat-selected">
                        </div>
                        <div class="flex">
                            <label class="w-6/12">Studio</label>
                            <h1>{{ $movie->studio_name }}</h1>
                            <input type="hidden" name="studio" value="{{ $movie->studio_name }}">
                        </div>
                        <hr class="my-2">
                        <div class="flex">
                            <label class="w-6/12">Ticket Price</label>
                            <h1 id="price"></h1>
                            <input type="hidden" name="price" id="price-input">
                        </div>
                        <div class="flex">
                            <label class="w-6/12">Service Fees</label>
                            <h1 id="service-fees"></h1>
                            <input type="hidden" name="service_fees" id="service-fees-input">
                        </div>
                        <hr class="my-2">
                        <div class="flex">
                            <label class="font-bold w-6/12">Entire Pay</label>
                            <h1 id="entire-pay" class="font-bold"></h1>
                            <input type="hidden" name="entire_pay" value="" id="entire-pay-input">
                        </div>
                        <hr class="my-2">
                        <div class="flex">
                            <label class="font-bold w-6/12">Amount Paid</label>
                            <div>
                                <input type="number" id="amount-paid" name="amount_paid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Amount" value="" required>
                                <h1 id="change">Rp. 0</h1>
                                <input type="hidden" id="change-input" name="change">
                            </div>
                        </div>
                        <button type="submit" class="inline bg-indigo-500 text-dark-100 py-2 px-3 rounded shadow-md hover:bg-indigo-400 disabled:bg-indigo-300 disabled:cursor-not-allowed">Make An Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
  

    <script>
        // Get the button
        const buttons = document.querySelectorAll(".seat");

        // Get the Confirm btn
        const confirmBtn = document.getElementById("confirm");

        // Get Seat Selected
        const seatSelected = document.querySelector(".seat-active");
        const seatSelectedH1 = document.getElementById("seat-selected-h1");

        // Get Price
        const price = document.getElementById("price");

        // Get Service Fees
        const serviceFees = document.getElementById("service-fees");

        // Get Entire Pay
        const entirePay = document.getElementById("entire-pay");

        confirmBtn.disabled = true;

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                this.classList.toggle("seat-active");
                const seatsSelected = document.querySelectorAll(".seat-active");
                if (seatsSelected.length > 0) {
                    confirmBtn.disabled = false;
                    let selectedSeatsText = "";
                    seatsSelected.forEach((seat, index) => {
                        selectedSeatsText += seat.value;
                        if (index < seatsSelected.length - 1) {
                        selectedSeatsText += ", ";
                        }
                    });
                    // Menghitung harga
                    const ticketPrice = 50000;
                    const serviceFee = 2000;
                    const totalPrice = ticketPrice * seatsSelected.length;
                    const totalServiceFee = serviceFee * seatsSelected.length;
                    price.textContent = `Rp. ${ticketPrice} x ${seatsSelected.length}`;
                    serviceFees.textContent = `Rp. ${serviceFee} x ${seatsSelected.length}`;
                    entirePay.textContent = `Rp. ${totalPrice + totalServiceFee}`;
                    // Menyimpan data harga
                    document.getElementById("price-input").value = `Rp. ${ticketPrice} x ${seatsSelected.length}`;
                    document.getElementById("service-fees-input").value = `Rp. ${serviceFee} x ${seatsSelected.length}`;
                    document.getElementById("entire-pay-input").value = totalPrice + totalServiceFee;
                    // Mengambil seat yang dipilih
                    seatSelectedH1.textContent = selectedSeatsText;
                    document.getElementById('selected-seats').value = selectedSeatsText;
                    const z = document.getElementById('selected-seats').value = selectedSeatsText.split(', ');
                    console.log(z);
                } else {
                    confirmBtn.disabled = true;
                    seatSelectedH1.textContent = "No seat selected";
                }
            });
        });

        // Event listener untuk perubahan jumlah yang dibayarkan
        const amountPaidInput = document.getElementById("amount-paid");
        const changeH1 = document.getElementById("change");
        const changeInput = document.getElementById("change-input");

        amountPaidInput.addEventListener("input", function() {
            const seatsSelected = document.querySelectorAll(".seat-active");
            if (seatsSelected.length > 0) {
                // Menghitung total pembayaran
                const ticketPrice = 50000;
                const serviceFee = 2000;
                const totalPrice = ticketPrice * seatsSelected.length;
                const totalServiceFee = serviceFee * seatsSelected.length;
                const totalPayment = totalPrice + totalServiceFee;
                
                // Menghitung kembalian
                const amountPaid = parseFloat(this.value) || 0;
                const change = amountPaid - totalPayment;
                changeH1.textContent = "Rp. " + change.toLocaleString();
                changeInput.value = change;
            }
        });
    </script>
@endsection
