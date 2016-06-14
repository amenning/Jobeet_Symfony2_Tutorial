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
        $__internal_4d7aea3a378a9c0c9b564d730db839ed52442e96e24dbdec09e8d29b36fe9c9f = $this->env->getExtension("native_profiler");
        $__internal_4d7aea3a378a9c0c9b564d730db839ed52442e96e24dbdec09e8d29b36fe9c9f->enter($__internal_4d7aea3a378a9c0c9b564d730db839ed52442e96e24dbdec09e8d29b36fe9c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d7aea3a378a9c0c9b564d730db839ed52442e96e24dbdec09e8d29b36fe9c9f->leave($__internal_4d7aea3a378a9c0c9b564d730db839ed52442e96e24dbdec09e8d29b36fe9c9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f597fb301705c9b2b7b76ca8c82aa1956da5753281c7084b6732637cf11ae7f = $this->env->getExtension("native_profiler");
        $__internal_6f597fb301705c9b2b7b76ca8c82aa1956da5753281c7084b6732637cf11ae7f->enter($__internal_6f597fb301705c9b2b7b76ca8c82aa1956da5753281c7084b6732637cf11ae7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f597fb301705c9b2b7b76ca8c82aa1956da5753281c7084b6732637cf11ae7f->leave($__internal_6f597fb301705c9b2b7b76ca8c82aa1956da5753281c7084b6732637cf11ae7f_prof);

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
