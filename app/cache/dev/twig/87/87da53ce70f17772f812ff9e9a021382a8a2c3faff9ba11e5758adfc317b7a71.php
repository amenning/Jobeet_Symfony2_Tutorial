<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ea0771c8fc37a20738ebd4cdfcd0f375fa400ab314b21331bb5069bacf9129a8 extends Twig_Template
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
        $__internal_ee6754a6deb14ffea3e2db9436495cc6f8fd807c56f80f383f865943f21e235a = $this->env->getExtension("native_profiler");
        $__internal_ee6754a6deb14ffea3e2db9436495cc6f8fd807c56f80f383f865943f21e235a->enter($__internal_ee6754a6deb14ffea3e2db9436495cc6f8fd807c56f80f383f865943f21e235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ee6754a6deb14ffea3e2db9436495cc6f8fd807c56f80f383f865943f21e235a->leave($__internal_ee6754a6deb14ffea3e2db9436495cc6f8fd807c56f80f383f865943f21e235a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
