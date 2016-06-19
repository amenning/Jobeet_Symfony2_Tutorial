<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_67b6924862c0c0e01f44fee66a71db0af5f29e9c3f3846d4d72e9f9358ef57f9 extends Twig_Template
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
        $__internal_9bd2d5bfb762b856386470e249df662b4db8d8dc8bd35a0635b55deb51c7106f = $this->env->getExtension("native_profiler");
        $__internal_9bd2d5bfb762b856386470e249df662b4db8d8dc8bd35a0635b55deb51c7106f->enter($__internal_9bd2d5bfb762b856386470e249df662b4db8d8dc8bd35a0635b55deb51c7106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9bd2d5bfb762b856386470e249df662b4db8d8dc8bd35a0635b55deb51c7106f->leave($__internal_9bd2d5bfb762b856386470e249df662b4db8d8dc8bd35a0635b55deb51c7106f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dded7e6c57f77444ef892b07ac90f4f501c7e742f13b3ab1521918bf41e7868 = $this->env->getExtension("native_profiler");
        $__internal_5dded7e6c57f77444ef892b07ac90f4f501c7e742f13b3ab1521918bf41e7868->enter($__internal_5dded7e6c57f77444ef892b07ac90f4f501c7e742f13b3ab1521918bf41e7868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5dded7e6c57f77444ef892b07ac90f4f501c7e742f13b3ab1521918bf41e7868->leave($__internal_5dded7e6c57f77444ef892b07ac90f4f501c7e742f13b3ab1521918bf41e7868_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
