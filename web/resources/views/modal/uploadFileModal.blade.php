<div id="myModal" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center hidden ">

    <div class="modal-overlay absolute upload-modal-backdrop bg-gray-900 opacity-50 cursor-pointer" onclick="closeUploadModal()" style="height: 100%;width:100%">
    </div>

    <div class="modal-container bg-white mx-auto rounded shadow-sm z-50 overflow-y-auto" id="modalContainer">
        <!-- Modal Header -->
        <div class="modal-header p-6 border-b">
            <h2 class="text-2xl font-bold">Upload File</h2>
            <button id="closeModal" class="modal-close upClIcon" onclick="closeUploadModal()"><i
                    class="fa-solid fa-circle-xmark"></i></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body py-6 px-6" id="modalBody">
            <span class="modalUpIcon"><i class="fa-solid fa-cloud-arrow-up"></i></span>
            <p class="text-lg">Drag and drop files here or use the file input:</p>
            <span class="text-gray-500">Drop files here</span>
            <form action="{{ route('handleFile') }}" class="dropzone mt-4 justify-items-center"
                id="my-awesome-dropzone">
                @csrf
            </form>
        </div>
    </div>
</div>
