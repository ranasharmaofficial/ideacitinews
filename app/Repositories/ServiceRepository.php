<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Models\MasterService;
use App\Models\ServiceSection;
use App\Models\ServiceSectionData;


class ServiceRepository implements ServiceRepositoryInterface
{
    public function getServiceList(){
        return MasterService::select('id', 'title')->where('status', 1)->get();
    }

    public function getServiceSectionList($page_id){
        return ServiceSection::select('id', 'section_name', 'title')->where('page_id', $page_id)->where('status', 1)->get();
    }

    /** CMS Page Repo Function Start */
        public function allServices($request){
            $pages = MasterService::select('*');
            if($request['search']){
                $pages = $pages->where('title','LIKE',"%{$request['search']}%");
            }
            $pages = $pages->latest()->paginate(10);
            return $pages;
        }

        public function storeService($request, $data){
            $master_product = new MasterService();
            $master_product->parent_id = $data['parent_id'];
            $master_product->title = $data['title'];
            $master_product->page_url = $data['page_url'];
            $master_product->status = $data['status'];
            $master_product->meta_title = $data['meta_title'];
            $master_product->meta_tag = $data['meta_tag'];
            $master_product->meta_description = $data['meta_description'];
            $master_product->created_by = $data['created_by'];
            $master_product->other_icon = $data['other_icon'];
            $master_product->short_description = $data['short_description'];

            if($data['icon']){
                $master_product->icon = $data['icon'];
            }

            if($data['banner']){
                $master_product->banner = $data['banner'];
            }

            if($data['image']){
                $master_product->image = $data['image'];
            }

            $master_product->save();
        }

        public function findService($id){
            return MasterService::find($id);
        }

        public function updateService($data, $id){
            $page = MasterService::where('id', $id)->first();
            $page->parent_id = $data['parent_id'];
            $page->title = $data['title'];
            // $page->page_url = $data['page_url'];
            $page->status = $data['status'];
            $page->meta_title = $data['meta_title'];
            $page->meta_tag = $data['meta_tag'];
            $page->meta_description = $data['meta_description'];
            $page->updated_by = $data['updated_by'];
            $page->other_icon = $data['other_icon'];
            $page->short_description = $data['short_description'];
            if($data['icon']){
                $page->icon = $data['icon'];
            }

            if($data['banner']){
                $page->banner = $data['banner'];
            }
            if($data['image']){
                $page->image = $data['image'];
            }
            $page->save();
        }

        public function deleteService($id){
            $delete_service = MasterService::find($id);
            $section_ids = ServiceSection::where('page_id', $id)->pluck('id');
            if(sizeof($section_ids)>0){
                $delete_section = ServiceSection::whereIn('id', $section_ids)->delete();
            }
            $section_data_ids = ServiceSectionData::where('page_id', $id)->pluck('id');
            if(sizeof($section_data_ids)>0){
                $delete_section_data = ServiceSectionData::whereIn('id', $section_data_ids)->delete();
            }
            $delete_service->delete();
        }
    /** CMS Page Repo Function End */

    /** Page Section Repo Function Start */
        public function allServiceSectionList($request){
            $master_pages = ServiceSection::select('service_sections.*', 'cp.title as page_title')
                ->leftJoin('master_services as cp', 'cp.id', '=', 'service_sections.page_id');
                if($request['page_id']){
                    $master_pages = $master_pages->where('service_sections.page_id',$request['page_id']);
                }
                if($request['section']){
                    $master_pages = $master_pages->where('service_sections.section_name','LIKE',"%{$request['section']}%");
                }
                if($request['search']){
                    $master_pages = $master_pages->where('service_sections.title','LIKE',"%{$request['search']}%");
                }
                $master_pages = $master_pages->latest()->paginate(10);
            return $master_pages;
        }

        public function findServiceSection($id){
            return ServiceSection::find($id);
        }

        public function storeServiceSection($data, $type){
            if($type == "store"){
                $page = new ServiceSection();
            }else{
                $page = ServiceSection::find($data['id']);
            }
            $page->page_id = $data['page_id'];
            $page->section_name = $data['section_name'];
            $page->title = $data['title'];
            $page->description = $data['description'];
            if($data['image']){
                $page->image = $data['image'];
            }

            $page->status = $data['status'];
            $page->created_by = $data['created_by'];
            $page->save();

        }

        public function deleteServiceSection($id){
            $delete_section = ServiceSection::find($id);
            $section_data_ids = ServiceSectionData::where('page_id', $delete_section->page_id)->where('section_id', $id)->pluck('id');
            if(sizeof($section_data_ids)>0){
                $delete_section_data = ServiceSectionData::whereIn('id', $section_data_ids)->delete();
            }
            $delete_section->delete();
        }
    /** Page Section Repo Function End */

    /** Section Data Repo Function Start */
        public function allServiceSectionDataList($request){
            $data = ServiceSectionData::select('service_section_datas.*', 'cp.title as page_title', 'ps.section_name')
                ->leftJoin('master_services as cp', 'cp.id', '=', 'service_section_datas.page_id')
                ->leftJoin('service_sections as ps', 'ps.id', '=', 'service_section_datas.section_id');
                if($request['page_id']){
                    $data = $data->where('service_section_datas.page_id', $request['page_id']);
                }
                if($request['section']){
                    $data = $data->where('service_section_datas.section_id',$request['section']);
                }
                if($request['search']){
                    $data = $data->where('service_section_datas.title','LIKE',"%{$request['search']}%");
                }
                $data = $data->latest()->paginate(10);
            return $data;
        }

        public function findServiceSectionData($id){
            return ServiceSectionData::find($id);
        }

        public function storeServiceSectionData($data, $type){
            if($type == "store"){
                $page = new ServiceSectionData();
                $page->created_by = $data['created_by'];
            }else{
                $page = ServiceSectionData::find($data['id']);
                $page->updated_by = $data['updated_by'];
            }
            $page->page_id = $data['page_id'];
            $page->section_id = $data['section_id'];
            $page->title = $data['title'];
            $page->description = $data['description'];
            if($data['img']){
                $page->img = $data['img'];
            }
            if($data['other']){
                $page->other = $data['other'];
            }
            $page->order_number = $data['order_number'];
            // $page->other = $data['other'];
            $page->status = $data['status'];
            $page->save();

        }

        public function deleteServiceSectionData($id){
            $delete_section_data = ServiceSectionData::find($id);
            $delete_section_data->delete();
        }
    /** Section Data Repo Function End */
}
