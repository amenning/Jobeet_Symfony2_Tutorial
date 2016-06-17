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
        $__internal_30180fcf810e579acbf3e6087ac312ceba31989ac17df4742c2ab7c38044b828 = $this->env->getExtension("native_profiler");
        $__internal_30180fcf810e579acbf3e6087ac312ceba31989ac17df4742c2ab7c38044b828->enter($__internal_30180fcf810e579acbf3e6087ac312ceba31989ac17df4742c2ab7c38044b828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_30180fcf810e579acbf3e6087ac312ceba31989ac17df4742c2ab7c38044b828->leave($__internal_30180fcf810e579acbf3e6087ac312ceba31989ac17df4742c2ab7c38044b828_prof);

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
