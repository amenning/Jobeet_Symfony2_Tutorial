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
        $__internal_6e4a5864013e9751a8fd76d191903708dbb60afe4cc6cefe536e0e7690453556 = $this->env->getExtension("native_profiler");
        $__internal_6e4a5864013e9751a8fd76d191903708dbb60afe4cc6cefe536e0e7690453556->enter($__internal_6e4a5864013e9751a8fd76d191903708dbb60afe4cc6cefe536e0e7690453556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6e4a5864013e9751a8fd76d191903708dbb60afe4cc6cefe536e0e7690453556->leave($__internal_6e4a5864013e9751a8fd76d191903708dbb60afe4cc6cefe536e0e7690453556_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe7e7fd6dd3a153aec339ea16958407dd710b12af254e5ce006b4a6ed26f7752 = $this->env->getExtension("native_profiler");
        $__internal_fe7e7fd6dd3a153aec339ea16958407dd710b12af254e5ce006b4a6ed26f7752->enter($__internal_fe7e7fd6dd3a153aec339ea16958407dd710b12af254e5ce006b4a6ed26f7752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fe7e7fd6dd3a153aec339ea16958407dd710b12af254e5ce006b4a6ed26f7752->leave($__internal_fe7e7fd6dd3a153aec339ea16958407dd710b12af254e5ce006b4a6ed26f7752_prof);

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
