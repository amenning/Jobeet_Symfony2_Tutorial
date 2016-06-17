<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9e18fb473d54c545245d292a89ca5d295c194e00c8e5bbe2ee07d52d143b6c33 extends Twig_Template
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
        $__internal_8cfa1c271ae2bdc07743d73ee772e01e294fe4e55eae256dbe04b13ba627a4aa = $this->env->getExtension("native_profiler");
        $__internal_8cfa1c271ae2bdc07743d73ee772e01e294fe4e55eae256dbe04b13ba627a4aa->enter($__internal_8cfa1c271ae2bdc07743d73ee772e01e294fe4e55eae256dbe04b13ba627a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8cfa1c271ae2bdc07743d73ee772e01e294fe4e55eae256dbe04b13ba627a4aa->leave($__internal_8cfa1c271ae2bdc07743d73ee772e01e294fe4e55eae256dbe04b13ba627a4aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
