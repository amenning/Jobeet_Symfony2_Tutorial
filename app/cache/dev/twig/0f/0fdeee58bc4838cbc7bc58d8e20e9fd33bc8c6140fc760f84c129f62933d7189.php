<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1f3367bdad487af63122faa8ab82765ef897ebc3f49d08d80673105223fb64c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a7a19d20343c41126227289c66a50abdf2bea0758e8f6571805b551694e8249 = $this->env->getExtension("native_profiler");
        $__internal_2a7a19d20343c41126227289c66a50abdf2bea0758e8f6571805b551694e8249->enter($__internal_2a7a19d20343c41126227289c66a50abdf2bea0758e8f6571805b551694e8249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2a7a19d20343c41126227289c66a50abdf2bea0758e8f6571805b551694e8249->leave($__internal_2a7a19d20343c41126227289c66a50abdf2bea0758e8f6571805b551694e8249_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6384e0af80d11aa9cdaa7a436fbd5b062fd77a5563cdc4537ca006ca4147d03a = $this->env->getExtension("native_profiler");
        $__internal_6384e0af80d11aa9cdaa7a436fbd5b062fd77a5563cdc4537ca006ca4147d03a->enter($__internal_6384e0af80d11aa9cdaa7a436fbd5b062fd77a5563cdc4537ca006ca4147d03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6384e0af80d11aa9cdaa7a436fbd5b062fd77a5563cdc4537ca006ca4147d03a->leave($__internal_6384e0af80d11aa9cdaa7a436fbd5b062fd77a5563cdc4537ca006ca4147d03a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
