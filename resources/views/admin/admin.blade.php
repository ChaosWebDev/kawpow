<x-layout title="Admin Settings">
    <main id="admin">
        <header>
            <h2>KawPow - Administration</h2>
        </header>
        <section class="content">
            @foreach ($coins as $coin)
                <div class="card selector" data-id="{{ $coin->symbol }}">
                    <h4>{{ $coin->name }}</h4>
                    <h3>{{ strtoupper($coin->symbol) }}</h3>
                </div>
            @endforeach
            <div class="card selector" data-id="new">
                <h3>New</h3>
                <h3>Pool</h3>
            </div>
        </section>

        <section id="forms">
            @foreach ($coins as $coin)
                @include('admin.partial.update-form', $coin)
            @endforeach
            @include('admin.partial.new-form')
        </section>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </main>

    <form action="{{ route('admin.pool.destroy') }}" method="post" id='deletePoolForm' style='display:none'>
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" id='deleteID' required>
    </form>

    <script type='module'>
        $(() => {
            $(document).on('click', '.selector', function(e) {
                const id = $(this).data('id');
                $("section.forms").removeClass('hidden');
                $(".form.card").addClass('hidden');
                $("#form-" + id).removeClass('hidden');
            });

            @if (session('updated_coin'))
                let updatedCoin = "{{ session('updated_coin') }}";
                $("section.forms").removeClass('hidden');
                $("#form-" + updatedCoin).removeClass('hidden');
            @endif
        });

        window.destroyPool = function(id) {
            console.log('ding');
            $("#deleteID").val(id);
            $("#deletePoolForm").submit();
        }
    </script>
</x-layout>
