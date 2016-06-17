<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b68379fd9ef47a7b121c53ec889360537dbae93b085f477d94a806103aab5675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05ab5fb65e94571c2bca9c87d0dad59e7dbfe5d4fc4458743935a37b869f375c = $this->env->getExtension("native_profiler");
        $__internal_05ab5fb65e94571c2bca9c87d0dad59e7dbfe5d4fc4458743935a37b869f375c->enter($__internal_05ab5fb65e94571c2bca9c87d0dad59e7dbfe5d4fc4458743935a37b869f375c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_05ab5fb65e94571c2bca9c87d0dad59e7dbfe5d4fc4458743935a37b869f375c->leave($__internal_05ab5fb65e94571c2bca9c87d0dad59e7dbfe5d4fc4458743935a37b869f375c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
