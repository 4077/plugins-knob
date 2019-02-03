<?php namespace plugins\knob\controllers;

class Main extends \Controller
{
    public function reload()
    {
        $this->jquery('|')->replace($this->view());
    }

    public function view()
    {
        $v = $this->v('|');

        $v->assign('VALUE', $this->data('value'));

        $this->js('jquery.knob.min');

        $pluginOptions = unmap($this->data(), 'update_request, value, min, max');

        ra($pluginOptions, [
            'min' => $this->data('min') ?: 0,
            'max' => $this->data('max') ?: 100,
        ]);

        $this->widget(':|', [
            'pluginOptions' => $pluginOptions,
            '.r'            => [
                'update' => $this->data('update_request')
            ]
        ]);

        return $v;
    }
}
