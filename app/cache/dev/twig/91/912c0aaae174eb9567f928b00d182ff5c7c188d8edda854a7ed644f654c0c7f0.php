<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_49c3157e94cc7e11cd7363c6d8b4761aa35c688da0a4340a6bb508d2591d6775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4f993f136cebb5b6f8a2feb4a9e3804f15b9fe31a13998509e70093ec8c6b2a = $this->env->getExtension("native_profiler");
        $__internal_f4f993f136cebb5b6f8a2feb4a9e3804f15b9fe31a13998509e70093ec8c6b2a->enter($__internal_f4f993f136cebb5b6f8a2feb4a9e3804f15b9fe31a13998509e70093ec8c6b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f993f136cebb5b6f8a2feb4a9e3804f15b9fe31a13998509e70093ec8c6b2a->leave($__internal_f4f993f136cebb5b6f8a2feb4a9e3804f15b9fe31a13998509e70093ec8c6b2a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8e8be8297a8d7cac2bf1eb4573dad4fe8902ed9316180c9d1b1a7f52d9232c53 = $this->env->getExtension("native_profiler");
        $__internal_8e8be8297a8d7cac2bf1eb4573dad4fe8902ed9316180c9d1b1a7f52d9232c53->enter($__internal_8e8be8297a8d7cac2bf1eb4573dad4fe8902ed9316180c9d1b1a7f52d9232c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_8e8be8297a8d7cac2bf1eb4573dad4fe8902ed9316180c9d1b1a7f52d9232c53->leave($__internal_8e8be8297a8d7cac2bf1eb4573dad4fe8902ed9316180c9d1b1a7f52d9232c53_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
