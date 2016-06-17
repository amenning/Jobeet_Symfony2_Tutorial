<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f7779c896b5db9d6affc8af5fc7be11fa8a71c0e249a02c0dffd3c0b9179c35f extends Twig_Template
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
        $__internal_af2c9ce0c7cadf1ff6c72b40e1ae98dfc5e4d2026671bd2149768edcb208a61f = $this->env->getExtension("native_profiler");
        $__internal_af2c9ce0c7cadf1ff6c72b40e1ae98dfc5e4d2026671bd2149768edcb208a61f->enter($__internal_af2c9ce0c7cadf1ff6c72b40e1ae98dfc5e4d2026671bd2149768edcb208a61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_af2c9ce0c7cadf1ff6c72b40e1ae98dfc5e4d2026671bd2149768edcb208a61f->leave($__internal_af2c9ce0c7cadf1ff6c72b40e1ae98dfc5e4d2026671bd2149768edcb208a61f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
