<?php


namespace Wandx\Support\Traits;


trait DestroyTrait
{
    public function destroy($id): void
    {
        $this->_model->find($id)->delete();
    }
}
