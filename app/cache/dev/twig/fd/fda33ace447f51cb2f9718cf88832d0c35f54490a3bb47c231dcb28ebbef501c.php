<?php

/* SonataAdminBundle:CRUD:dashboard__action.html.twig */
class __TwigTemplate_0c018f84bf856a1819439fe40fd1ca217cea5b03d3dedc6c5af94812a4a3265e extends Twig_Template
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
        $__internal_28090f21f7e3bc36e52243010023d97cb57854aafb3b2951d12b6cde9b9f8dd6 = $this->env->getExtension("native_profiler");
        $__internal_28090f21f7e3bc36e52243010023d97cb57854aafb3b2951d12b6cde9b9f8dd6->enter($__internal_28090f21f7e3bc36e52243010023d97cb57854aafb3b2951d12b6cde9b9f8dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>";
        
        $__internal_28090f21f7e3bc36e52243010023d97cb57854aafb3b2951d12b6cde9b9f8dd6->leave($__internal_28090f21f7e3bc36e52243010023d97cb57854aafb3b2951d12b6cde9b9f8dd6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <a class="btn btn-link btn-flat" href="{{ action.url }}">*/
/*     <i class="fa fa-{{ action.icon }}"></i>*/
/*     {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}*/
/* </a>*/
