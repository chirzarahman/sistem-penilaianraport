<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru - SMK Arimbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../../assets/logo.png" />
</head>

<body>
    <main class="text-[#44566C]">
        <div class="flex-row lg:flex mt-10 mb-20 mx-4 lg:mx-20 gap-5">
            <div class="bg-white w-full lg:w-[40%] h-fit rounded-md drop-shadow-2xl mb-10 lg:mb-0">
                <div class="flex flex-col items-center justify-center pt-8">
                    <img class="w-40 bg-white rounded-3xl object-cover" alt src="../../assets/logo.png" />
                    <p class="text-[29px] mb-[14px] mt-2 text-center">
                        Guru SMK Arimbi
                    </p>
                    <div class="bg-[#F0F0F6] py-2 px-4 rounded-full w-fit text-sm mb-4">
                        Guru
                    </div>
                </div>
                <div class="bg-[#F3F6F6] flex flex-col justify-center px-12 py-8 rounded-b-md">
                    <div class="mt-5">
                        <span class="capitalize font-semibold text-lg">
                            Deskripsi
                        </span>
                        <p class="text-sm">
                            Guru dapat menginput nilai murid untuk hasil
                            raport
                        </p>
                    </div>
                    <a href="../../index.php"
                        class="bg-[#fd3030] rounded-xl text-white px-8 py-3 mt-10 w-full text-center hover:shadow-xl hover:shadow-[#fd30306a] transition hover:duration-500 cursor-pointer flex items-center justify-center gap-x-2">
                        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                            <path clip-rule="evenodd"
                                d="M14.75 12C14.75 11.5858 14.4142 11.25 14 11.25H2C1.58579 11.25 1.25 11.5858 1.25 12C1.25 12.4142 1.58579 12.75 2 12.75H14C14.4142 12.75 14.75 12.4142 14.75 12Z"
                                fill="currentColor" fill-rule="evenodd" />
                            <path clip-rule="evenodd"
                                d="M6.03033 7.96967C5.73744 7.67678 5.26256 7.67678 4.96967 7.96967L1.46967 11.4697C1.17678 11.7626 1.17678 12.2374 1.46967 12.5303L4.96967 16.0303C5.26256 16.3232 5.73744 16.3232 6.03033 16.0303C6.32322 15.7374 6.32322 15.2626 6.03033 14.9697L3.06066 12L6.03033 9.03033C6.32322 8.73744 6.32322 8.26256 6.03033 7.96967Z"
                                fill="currentColor" fill-rule="evenodd" />
                            <path clip-rule="evenodd"
                                d="M14.5956 5.25C12.017 5.25 9.77484 6.73848 8.66955 8.9258C8.48274 9.29549 8.0316 9.44375 7.66191 9.25693C7.29221 9.07012 7.14396 8.61898 7.33077 8.24929C8.67788 5.58343 11.422 3.75 14.5956 3.75C19.1083 3.75 22.7502 7.45274 22.7502 12C22.7502 12.7598 22.6485 13.4967 22.4576 14.1972C22.3487 14.5968 21.9364 14.8325 21.5368 14.7236C21.1372 14.6147 20.9015 14.2025 21.0104 13.8028C21.1665 13.2298 21.2502 12.6254 21.2502 12C21.2502 8.26299 18.2618 5.25 14.5956 5.25ZM7.66191 14.7431C8.0316 14.5563 8.48274 14.7045 8.66955 15.0742C9.77484 17.2615 12.017 18.75 14.5956 18.75C16.0768 18.75 17.4437 18.26 18.5499 17.4296C18.8812 17.1809 19.3513 17.2479 19.6 17.5791C19.8486 17.9104 19.7817 18.3805 19.4504 18.6292C18.0947 19.6469 16.4141 20.25 14.5956 20.25C11.422 20.25 8.67788 18.4166 7.33077 15.7507C7.14396 15.381 7.29221 14.9299 7.66191 14.7431Z"
                                fill="currentColor" fill-rule="evenodd" />
                        </svg>
                        <span>Keluar</span>
                    </a>
                </div>
            </div>
            <div class="bg-white w-full lg:w-fit h-fit rounded-md shadow-2xl mb-10 lg:mb-0 lg:hidden">
                <h1 class="text-2xl font-semibold pt-5 pl-5">Menu</h1>
                <div class="flex flex-col justify-center px-12 py-6 gap-y-4">
                    <a href="index.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">Raport
                            Murid</span>
                    </a>
                    <a href="profile.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">profile</span>
                    </a>
                </div>
            </div>
            <div class="bg-white w-full h-max rounded-md shadow-2xl py-7">
                <div class="relative w-max pb-3 ml-4 lg:mx-10">
                    <div class="absolute border-b-4 border-blue-500 bottom-0 left-0 w-14 rounded-full"></div>
                    <h2 class="font-semibold text-[2rem] uppercase">Input Nilai</h2>
                </div>
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <form action="#">
                            <div class="flex flex-col gap-y-4 mb-4">
                                <div class="flex items-center gap-x-4">
                                    <div x-data="{ showModal: false }">
                                        <button type="submit" @click="showModal = true"
                                            class="inline-block w-full rounded-lg bg-blue-500 px-3 py-1.5 font-medium text-white sm:w-auto">
                                            Pilih Murid
                                        </button>
                                        <div x-show="showModal" class="fixed inset-0 transition-opacity z-20"
                                            aria-hidden="true" @click="showModal = false">
                                            <div class="absolute inset-0 bg-gray-500 opacity-75">
                                            </div>
                                        </div>
                                        <div x-show="showModal"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="fixed z-30 inset-0 overflow-y-auto" x-cloak>
                                            <div
                                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <div class="sm:flex sm:items-start">
                                                            <div class="w-full">
                                                                <label for="name"
                                                                    class="block mb-2 text-sm font-medium text-gray-900">NIS</label>
                                                                <input type="text" name="name" id="name"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                                                    placeholder="NIS" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <a href="#"
                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                            Simpan</a>
                                                        <button @click="showModal = false" type="button"
                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                            Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p><span class="font-medium">Nama Murid </span>: -</p>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div x-data="{ showModal: false }">
                                        <button type="submit" @click="showModal = true"
                                            class="inline-block w-full rounded-lg bg-blue-500 px-3 py-1.5 font-medium text-white sm:w-auto">
                                            Pilih Mata Pelajaran
                                        </button>
                                        <div x-show="showModal" class="fixed inset-0 transition-opacity z-20"
                                            aria-hidden="true" @click="showModal = false">
                                            <div class="absolute inset-0 bg-gray-500 opacity-75">
                                            </div>
                                        </div>
                                        <div x-show="showModal"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="fixed z-30 inset-0 overflow-y-auto" x-cloak>
                                            <div
                                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <div class="sm:flex sm:items-start">
                                                            <div class="w-full">
                                                                <label for="name"
                                                                    class="block mb-2 text-sm font-medium text-gray-900">Kode
                                                                    Mata Pelajaran</label>
                                                                <input type="text" name="name" id="name"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                                                    placeholder="Kode Mata Pelajaran" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <a href="#"
                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                            Simpan</a>
                                                        <button @click="showModal = false" type="button"
                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                            Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p><span class="font-medium">Mata Pelajaran </span>: -</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div class="relative">
                                    <input type="text" id="nilai_ul"
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="nilai_ul"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nilai
                                        Ulangan</label>
                                </div>
                                <div class="relative">
                                    <input type="text" id="nilai_uts"
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="nilai_uts"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nilai
                                        UTS</label>
                                </div>
                                <div class="relative col-span-2">
                                    <input type="text" id="nilai_uas"
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="nilai_uas"
                                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nilai
                                        UAS</label>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-x-4">
                                <a href="index.php"
                                    class="inline-block w-full rounded-lg bg-gray-200 px-5 py-3 font-medium text-gray-600 sm:w-auto text-center">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="inline-block w-full rounded-lg bg-blue-500 px-5 py-3 font-medium text-white sm:w-auto">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full lg:w-fit h-fit rounded-md shadow-2xl hidden lg:block">
                <div class="flex flex-col justify-center px-12 py-8 gap-y-4">
                    <a href="index.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">Raport
                            Murid</span>
                    </a>
                    <a href="profile.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">profile</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

</html>