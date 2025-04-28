<div class="btn-group" role="group" aria-label="Basic example">
    <a
        href="{{ route('users.show', $id) }}"
        class="btn btn-sm btn-outline-primary"
        >Detail</a
    >
    <a
        href="{{ route('users.edit', $id) }}"
        class="btn btn-sm btn-outline-primary"
        >Ubah</a
    >
    <form action="{{ route('users.destroy', $id) }}" method="post">
        @csrf @method('delete')
        <button
            class="btn btn-sm btn-outline-primary"
            type="submit"
            onclick="return confirm('are you sure?');"
        >
            Hapus
        </button>
    </form>
</div>
