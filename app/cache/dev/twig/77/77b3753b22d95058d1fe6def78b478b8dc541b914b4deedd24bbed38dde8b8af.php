<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_f610eb871bdfa200ff3a861694fd1300bf39d7ce2c53077e6302ad14cd4546a6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_305965fb3b026588c4dfd32531e6fed89d68db0e47e08b662ceaa1ca8c300af3 = $this->env->getExtension("native_profiler");
        $__internal_305965fb3b026588c4dfd32531e6fed89d68db0e47e08b662ceaa1ca8c300af3->enter($__internal_305965fb3b026588c4dfd32531e6fed89d68db0e47e08b662ceaa1ca8c300af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305965fb3b026588c4dfd32531e6fed89d68db0e47e08b662ceaa1ca8c300af3->leave($__internal_305965fb3b026588c4dfd32531e6fed89d68db0e47e08b662ceaa1ca8c300af3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_80585f47f6f451929d83a82a9f44937b97ac05d9f898a95580c727526c1ccc01 = $this->env->getExtension("native_profiler");
        $__internal_80585f47f6f451929d83a82a9f44937b97ac05d9f898a95580c727526c1ccc01->enter($__internal_80585f47f6f451929d83a82a9f44937b97ac05d9f898a95580c727526c1ccc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_80585f47f6f451929d83a82a9f44937b97ac05d9f898a95580c727526c1ccc01->leave($__internal_80585f47f6f451929d83a82a9f44937b97ac05d9f898a95580c727526c1ccc01_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
