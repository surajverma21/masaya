<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/3/15
 * Time: 11:46 AM
 */

class HostelRoomsController extends BaseController{

        public function hostel_preview_image(){

            $hostels  = Hostel::all();

            return View::make('admins.choose_hostel_hostel_preview')->with('hostels',$hostels);
        }

        public function choose_hostel_preview_index(){

            if(Input::get('hostel')){

                $hostel_id = Input::get('hostel');
                Session::forget('hostel_id');
                Session::put('hostel_id',$hostel_id);

            }else{

                $hostel_id = Session::get('hostel_id');
            }


            $list_hostel_room_preview = HostelRoomPreview::with('hostel')->where('hostel_id','=',$hostel_id)->get();
            //return  $list_hostel_room_preview;
            return View::make('admins.list_hostel_room_preview')->with('list_hostel_room_preview',$list_hostel_room_preview);

        }

        public function hostel_preview_add(){

            return View::make('admins.list_hostel_room_preview');
        }

        public function save_hostel_room_preview(){

            $hostel_id = Session::get('hostel_id');

            $hostel_room_preview_image = HostelRoomPreview::where('hostel_id','=',$hostel_id)->first();

            if(empty($hostel_room_preview_image)){

                    $hostel_room_preview_image = new HostelRoomPreview;

                    $tableName = 'hostel_room_preview';
                    $fieldName =  'hostel_room_preview_image';

                    if(Input::hasFile('hostel_preview_image')){

                        $destinationPath = '../uploads/hostel_hotel_room_preview';

                        $hostelRoomPreviewFileName = $this->generateRandomStringForImage($tableName,$fieldName);

                        Input::file('hostel_preview_image')->move($destinationPath, $hostelRoomPreviewFileName);

                    }else{

                        $hostelRoomPreviewFileName = '';
                    }


                    $hostel_room_preview_image->hostel_id = $hostel_id;
                    $hostel_room_preview_image->hostel_room_preview_image = $hostelRoomPreviewFileName;

                    $hostel_room_preview_image->save();

                    return Redirect::action('HostelRoomsController@choose_hostel_preview_index');

            }else{


                    $tableName = 'hostel_room_preview';
                    $fieldName =  'hostel_room_preview_image';

                    if(Input::hasFile('hostel_preview_image')){

                        $oldFieldName = $hostel_room_preview_image->hostel_room_preview_image;

                        @unlink('../uploads/hostel_hotel_room_preview/'.$oldFieldName->hostel_room_preview_image);

                        $destinationPath = '../uploads/hostel_hotel_room_preview';

                        $hostelRoomPreviewFileName = $this->generateRandomStringForImage($tableName,$fieldName);

                        Input::file('hostel_preview_image')->move($destinationPath, $hostelRoomPreviewFileName);

                    }else{

                        $hostelRoomPreviewFileName = '';
                    }



                    $hostel_room_preview_image->hostel_room_preview_image = $hostelRoomPreviewFileName;

                    $hostel_room_preview_image->save();

                    return Redirect::action('HostelRoomsController@choose_hostel_preview_index');
            }
        }

} 