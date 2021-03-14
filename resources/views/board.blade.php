@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="mx-auto pt-40 py-60 bg-gray-200">
    <div class="board bg-gray-50  max-w-4xl mx-auto p-5 rounded-lg">

        <!-- タイトル部分 -->
        <div class="grid grid-cols-10 gap-4 ">
            <div class="col-span-9 m-2">
                <input class="h-12 w-40 mr-5 text-xl" type="text" placeholder="ここは自動入力">
                <input type="text" class="h-12 w-80 text-xl" placeholder="お客様名 / 物件名 を入力して下さい">
                
            </div>
            <div class="col-span-1 rounded-full h-12 w-12 flex items-center justify-center bg-green-500 m-2">N</div>
        </div>
        <hr>


        <!-- board部分 -->
        <div class="grid grid-cols-12 gap-4">

          <!-- 進捗部分 -->
          <div class="m-2 p-4 bg-white col-span-5 rounded-lg">

            <h2 class="text-2xl">日程</h2>
            <hr class="mb-3">
            <div class="ml-3">
            <!-- 申込 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>申込</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- リーガルチェック -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>リーガルチェック</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- 契約 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>契約</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- 手付解除 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>手付解除</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- 本審査 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>本審査</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- 融資特約 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>融資特約</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- 金消 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>金消</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- 決済確認書 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>決済確認書</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div>
            <hr class="w-60 mb-2">
            <!-- 決済 -->
            <div class="flex text-xl">
                <div class="flex-initial mr-5 mb-2">
                    <input type="text" class="w-14 bg-gray-50 rounded-lg p-0.5" placeholder="○/○">
                    </div>
                <div class="flex-initial mr-3 mb-2">
                    <p>決済</p>
                </div>
                <div class="flex-initial selectWrap">
                  <select class="select bg-gray-100 rounded-lg p-0.5" name="" id="">
                    <option value="">未</option>
                    <option value="">進</option>
                    <option value="">済</option>
                  </select>
                </div>
            </div> 
            <hr class="w-60 mb-2">

            </div>          
          </div>



          <!-- メモ部分 -->
          <div class="m-2 p-4 relative bg-white col-span-7 rounded-lg">
            <h2 class="text-2xl">メモ</h2>
            <hr class="mb-3">
            <div class="mb-5">
              <p class="text-xl mb-2">3/13　○○期日</p>
            </div>
            <hr class="mb-2">
            <form action="" method="post">
                <textarea type="text" class="bg-gray-50 text-xl w-80 resize-none border-opacity-25 rounded-lg" placeholder="○/○  メモを入力"></textarea>
            </form>
            <button class="transition duration-200 ease-in-out rounded-lg p-2 absolute bottom-5 right-10 border-2 border-gray-500 hover:bg-gray-500 hover:text-white" >更新</button>

          
          </div>

        </div>


    </div>
</div>
@endsection('content')