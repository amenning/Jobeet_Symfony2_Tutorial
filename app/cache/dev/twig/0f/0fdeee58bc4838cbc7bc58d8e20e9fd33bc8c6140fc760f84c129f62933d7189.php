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
        $__internal_192708ffdf4b7cae0822cc0b12b5a0c2f2934dae5393b8624a9dd0de8a73021a = $this->env->getExtension("native_profiler");
        $__internal_192708ffdf4b7cae0822cc0b12b5a0c2f2934dae5393b8624a9dd0de8a73021a->enter($__internal_192708ffdf4b7cae0822cc0b12b5a0c2f2934dae5393b8624a9dd0de8a73021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_192708ffdf4b7cae0822cc0b12b5a0c2f2934dae5393b8624a9dd0de8a73021a->leave($__internal_192708ffdf4b7cae0822cc0b12b5a0c2f2934dae5393b8624a9dd0de8a73021a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_36bbc584ccdc07fe3924bed86c5796eb426efb8a209db2d15b7b750c5726637b = $this->env->getExtension("native_profiler");
        $__internal_36bbc584ccdc07fe3924bed86c5796eb426efb8a209db2d15b7b750c5726637b->enter($__internal_36bbc584ccdc07fe3924bed86c5796eb426efb8a209db2d15b7b750c5726637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_36bbc584ccdc07fe3924bed86c5796eb426efb8a209db2d15b7b750c5726637b->leave($__internal_36bbc584ccdc07fe3924bed86c5796eb426efb8a209db2d15b7b750c5726637b_prof);

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
