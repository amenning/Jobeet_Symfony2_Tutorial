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
        $__internal_d7f517390854bf639f41512aec87eedaa3d7697c084b86a2913a49d9387b940a = $this->env->getExtension("native_profiler");
        $__internal_d7f517390854bf639f41512aec87eedaa3d7697c084b86a2913a49d9387b940a->enter($__internal_d7f517390854bf639f41512aec87eedaa3d7697c084b86a2913a49d9387b940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d7f517390854bf639f41512aec87eedaa3d7697c084b86a2913a49d9387b940a->leave($__internal_d7f517390854bf639f41512aec87eedaa3d7697c084b86a2913a49d9387b940a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_375e2d5d48eb499e43956ac8503a27f8bcc846ffdb77d6300bbf053059ac2735 = $this->env->getExtension("native_profiler");
        $__internal_375e2d5d48eb499e43956ac8503a27f8bcc846ffdb77d6300bbf053059ac2735->enter($__internal_375e2d5d48eb499e43956ac8503a27f8bcc846ffdb77d6300bbf053059ac2735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_375e2d5d48eb499e43956ac8503a27f8bcc846ffdb77d6300bbf053059ac2735->leave($__internal_375e2d5d48eb499e43956ac8503a27f8bcc846ffdb77d6300bbf053059ac2735_prof);

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
